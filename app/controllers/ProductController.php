<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Product CRUD. Every action requires a valid Bearer access token.
 */
class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        header('Content-Type: application/json; charset=UTF-8');
        $this->call->helper('api');
        $this->call->library('database');
        $this->call->library('api');
        $this->call->model('Product_model');
    }

    /** Validate input; $partial=true (PATCH) only checks the fields that were sent. */
    private function validate(array $in, $partial = false)
    {
        $out = [];

        if (!$partial || array_key_exists('product_name', $in)) {
            $name = trim((string) ($in['product_name'] ?? ''));
            if ($name === '' || mb_strlen($name) > 100) {
                $this->api->respond_error('product_name is required (max 100 characters).', 422);
            }
            $out['product_name'] = $name;
        }
        if (!$partial || array_key_exists('description', $in)) {
            $out['description'] = isset($in['description']) ? trim((string) $in['description']) : null;
        }
        if (!$partial || array_key_exists('price', $in)) {
            if (!isset($in['price']) || !is_numeric($in['price']) || $in['price'] < 0 || $in['price'] > 99999999.99) {
                $this->api->respond_error('price must be a number between 0 and 99999999.99.', 422);
            }
            $out['price'] = number_format((float) $in['price'], 2, '.', '');
        }
        if (!$partial || array_key_exists('quantity', $in)) {
            if (!isset($in['quantity']) || filter_var($in['quantity'], FILTER_VALIDATE_INT) === false
                || (int) $in['quantity'] < 0) {
                $this->api->respond_error('quantity must be a whole number, 0 or more.', 422);
            }
            $out['quantity'] = (int) $in['quantity'];
        }
        return $out;
    }

    private function find_or_404($id)
    {
        $product = $this->Product_model->find_product((int) $id);
        if (!$product) {
            $this->api->respond_error('Product not found.', 404);
        }
        return $product;
    }

    /** GET /api/products */
    public function index()
    {
        $this->api->require_method('GET');
        $this->api->require_jwt();
        $this->api->respond(['data' => $this->Product_model->all_products()]);
    }

    /** GET /api/products/{id} */
    public function show($id)
    {
        $this->api->require_method('GET');
        $this->api->require_jwt();
        $this->api->respond(['data' => $this->find_or_404($id)]);
    }

    /** POST /api/products */
    public function store()
    {
        $this->api->require_method('POST');
        $this->api->require_jwt();

        $d  = $this->validate(json_input());
        $id = $this->Product_model->create_product(
            $d['product_name'], $d['description'], $d['price'], $d['quantity']
        );
        $this->api->respond([
            'message' => 'Product created.',
            'data'    => $this->Product_model->find_product($id),
        ], 201);
    }

    /** PUT|PATCH /api/products/{id} */
    public function update($id)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if (!in_array($method, ['PUT', 'PATCH'], true)) {
            $this->api->respond_error('Method Not Allowed', 405);
        }
        $this->api->require_jwt();
        $this->find_or_404($id);

        $d = $this->validate(json_input(), $method === 'PATCH');
        $this->Product_model->update_product((int) $id, $d);

        $this->api->respond([
            'message' => 'Product updated.',
            'data'    => $this->Product_model->find_product((int) $id),
        ]);
    }

    /** DELETE /api/products/{id} */
    public function destroy($id)
    {
        $this->api->require_method('DELETE');
        $this->api->require_jwt();
        $this->find_or_404($id);
        $this->Product_model->delete_product((int) $id);
        $this->api->respond(['message' => 'Product deleted.']);
    }
}
