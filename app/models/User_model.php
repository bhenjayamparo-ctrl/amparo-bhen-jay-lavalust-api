<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model
{
    protected $table = 'users';

    /** Find a user by username OR email (for login). */
    public function find_for_login($identifier)
    {
        $stmt = $this->db->raw(
            "SELECT id, username, email, password, role, is_active FROM users
             WHERE username = ? OR email = ? LIMIT 1",
            [$identifier, $identifier]
        );
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public function find_by_id($id)
    {
        $stmt = $this->db->raw(
            "SELECT id, username, email, role, is_active, created_at FROM users WHERE id = ? LIMIT 1",
            [$id]
        );
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public function exists($username, $email)
    {
        $stmt = $this->db->raw(
            "SELECT username, email FROM users WHERE username = ? OR email = ? LIMIT 1",
            [$username, $email]
        );
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public function count_users()
    {
        $stmt = $this->db->raw("SELECT COUNT(*) AS total FROM users");
        $row  = $stmt->fetch(PDO::FETCH_ASSOC);
        return (int) ($row['total'] ?? 0);
    }

    public function create($username, $email, $password_hash, $role = 'user')
    {
        $this->db->raw(
            "INSERT INTO users (username, email, password, role, is_active) VALUES (?, ?, ?, ?, 1)",
            [$username, $email, $password_hash, $role]
        );
        return (int) $this->db->last_id();
    }
}
