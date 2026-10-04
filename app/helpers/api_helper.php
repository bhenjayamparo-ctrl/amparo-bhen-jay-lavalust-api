<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Read the JSON request body WITHOUT HTML-escaping it.
 * (Api::body() runs htmlspecialchars on everything, which would corrupt
 * passwords and store "&" as "&amp;" in product names.)
 * React escapes values when rendering, and every query is parameterised.
 */
if (!function_exists('json_input')) {
    function json_input()
    {
        $raw = file_get_contents('php://input');
        $data = json_decode($raw, true);
        return is_array($data) ? $data : [];
    }
}
