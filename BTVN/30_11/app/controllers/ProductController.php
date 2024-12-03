<?php
require_once 'C:/xampp/htdocs/php/30_11/app/models/Product.php';

class ProductController {
    public function index() {
        $products = Product::getAll();
        include 'C:/xampp/htdocs/php/30_11/app/views/indexProduct.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            Product::add($_POST['name'], $_POST['price']);
            header('Location: /');
            exit();
        }
        include 'C:/xampp/htdocs/php/30_11/app/views/addProduct.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            Product::update($id, $_POST['name'], $_POST['price']);
            header('Location: /');
            exit();
        }
        
        $product = array_filter(Product::getAll(), function($product) use ($id) {
            return $product['id'] === $id;
        });
        
        $currentProduct = current($product);
        
        // Kiểm tra xem sản phẩm có tồn tại không
        if (!$currentProduct) {
            echo "Product not found.";
            return; // Hoặc chuyển hướng đến trang khác
        }
        
        include 'C:/xampp/htdocs/php/30_11/app/views/editProduct.php';
    }

    public function delete($id) {
        Product::delete($id);
        header('Location: /');
        exit();
    }
}
?>