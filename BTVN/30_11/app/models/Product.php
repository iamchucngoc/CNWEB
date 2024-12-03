<?php
class Product {
    public static function getAll() {
        return $_SESSION['products'];
    }

    public static function add($name, $price) {
        $newId = count($_SESSION['products']) + 1;
        $_SESSION['products'][] = ['id' => $newId, 'name' => $name, 'price' => $price];
    }

    public static function update($id, $name, $price) {
        foreach ($_SESSION['products'] as &$product) {
            if ($product['id'] === $id) {
                $product['name'] = $name;
                $product['price'] = $price;
                break;
            }
        }
    }

    public static function delete($id) {
        $_SESSION['products'] = array_filter($_SESSION['products'], function($product) use ($id) {
            return $product['id'] !== $id;
        });
        $_SESSION['products'] = array_values($_SESSION['products']);
        foreach ($_SESSION['products'] as $index => &$product) {
            $product['id'] = $index + 1; // Đặt lại ID
        }
    }
}
?>