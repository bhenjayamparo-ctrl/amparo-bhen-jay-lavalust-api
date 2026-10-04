<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        header('Content-Type: application/json; charset=UTF-8');
        $this->call->helper('api');
        $this->call->library('database');
        $this->call->library('api');
        $this->call->model('User_model');
    }

    /** POST /api/register */
    public function register()
    {
        $this->api->require_method('POST');
        // Light abuse protection: 10 registrations per 5 minutes per IP.
        $this->api->rate_limit('register_' . ($_SERVER['REMOTE_ADDR'] ?? 'x'), 10, 300);
        $in = json_input();

        $username = trim((string) ($in['username'] ?? ''));
        $email    = strtolower(trim((string) ($in['email'] ?? '')));
        $password = (string) ($in['password'] ?? '');

        if (!preg_match('/^[A-Za-z0-9_]{3,50}$/', $username)) {
            $this->api->respond_error('Username must be 3-50 characters (letters, numbers, underscore).', 422);
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 255) {
            $this->api->respond_error('A valid email is required.', 422);
        }
        if (strlen($password) < 6) {
            $this->api->respond_error('Password must be at least 6 characters.', 422);
        }
        if ($this->User_model->exists($username, $email)) {
            $this->api->respond_error('Username or email is already taken.', 409);
        }

        // The very first account created becomes the admin; everyone after is a normal user.
        $role = $this->User_model->count_users() === 0 ? 'admin' : 'user';

        $id = $this->User_model->create($username, $email, password_hash($password, PASSWORD_BCRYPT), $role);

        $this->api->respond([
            'message' => 'Registration successful. You can now log in.',
            'user'    => ['id' => $id, 'username' => $username, 'email' => $email, 'role' => $role],
        ], 201);
    }

    /** POST /api/login  (username or email + password) */
    public function login()
    {
        $this->api->require_method('POST');
        // Brute-force protection: 10 attempts per minute per IP.
        $this->api->rate_limit('login_' . ($_SERVER['REMOTE_ADDR'] ?? 'x'), 10, 60);

        $in         = json_input();
        $identifier = trim((string) ($in['username'] ?? ($in['email'] ?? '')));
        $password   = (string) ($in['password'] ?? '');

        if ($identifier === '' || $password === '') {
            $this->api->respond_error('Username and password are required.', 422);
        }

        $user = $this->User_model->find_for_login($identifier);

        if (!$user || !(int) $user['is_active'] || !password_verify($password, $user['password'])) {
            $this->api->respond_error('Invalid username or password.', 401);
        }

        $tokens = $this->api->issue_tokens([
            'id'     => (int) $user['id'],
            'role'   => $user['role'],
            'scopes' => ['read', 'write', 'delete'],
        ]);

        $this->api->respond([
            'message' => 'Login successful',
            'tokens'  => $tokens,
            'user'    => [
                'id'       => (int) $user['id'],
                'username' => $user['username'],
                'email'    => $user['email'],
                'role'     => $user['role'],
            ],
        ]);
    }

    /** POST /api/refresh  { refresh_token } */
    public function refresh()
    {
        $this->api->require_method('POST');
        $in    = json_input();
        $token = (string) ($in['refresh_token'] ?? '');
        if ($token === '') {
            $this->api->respond_error('refresh_token is required.', 422);
        }
        $this->api->refresh_access_token($token); // responds and exits
    }

    /** POST /api/logout  { refresh_token }  - revokes the refresh token */
    public function logout()
    {
        $this->api->require_method('POST');
        $in    = json_input();
        $token = (string) ($in['refresh_token'] ?? '');
        if ($token !== '') {
            $this->api->revoke_refresh_token($token);
        }
        $this->api->respond(['message' => 'Logged out']);
    }

    /** GET /api/me  (protected) */
    public function me()
    {
        $this->api->require_method('GET');
        $payload = $this->api->require_jwt();
        $user    = $this->User_model->find_by_id($payload['sub']);
        if (!$user) {
            $this->api->respond_error('Unauthorized', 401);
        }
        $this->api->respond(['user' => $user]);
    }
}
