<?php
require_once 'C:/xampp/htdocs/php/30_11/config/config.php';
require_once 'C:/xampp/htdocs/php/30_11/app/controllers/ProductController.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);
$controller = new ProductController();

$requestUri = explode('?', $_SERVER['REQUEST_URI'], 2);
$path = trim($requestUri[0], '/');

if ($path === '') {
    $controller->index();
} elseif ($path === 'add') {
    $controller->add();
} elseif ($path === 'edit') {
    $id = (int)$_GET['id'];
    $controller->edit($id);
} elseif ($path === 'delete') {
    $id = (int)$_GET['id'];
    $controller->delete($id);
} else {
    http_response_code(404);
    echo "404 Not Found";
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>