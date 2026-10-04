<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Product_model extends Model
{
    protected $table = 'products';

    public function all_products()
    {
        $stmt = $this->db->raw(
            "SELECT id, product_name, description, price, quantity, created_at
             FROM products ORDER BY id DESC"
        );
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find_product($id)
    {
        $stmt = $this->db->raw(
            "SELECT id, product_name, description, price, quantity, created_at
             FROM products WHERE id = ? LIMIT 1",
            [$id]
        );
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public function create_product($name, $description, $price, $quantity)
    {
        $this->db->raw(
            "INSERT INTO products (product_name, description, price, quantity) VALUES (?, ?, ?, ?)",
            [$name, $description, $price, $quantity]
        );
        return (int) $this->db->last_id();
    }

    public function update_product($id, array $fields)
    {
        $sets = [];
        $vals = [];
        foreach (['product_name', 'description', 'price', 'quantity'] as $col) {
            if (array_key_exists($col, $fields)) {
                $sets[] = "$col = ?";
                $vals[] = $fields[$col];
            }
        }
        if (!$sets) return;
        $vals[] = $id;
        $this->db->raw("UPDATE products SET " . implode(', ', $sets) . " WHERE id = ?", $vals);
    }

    public function delete_product($id)
    {
        $this->db->raw("DELETE FROM products WHERE id = ?", [$id]);
    }
}
