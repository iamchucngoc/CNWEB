<?php
session_start();
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = []; // Khởi tạo mảng sản phẩm nếu chưa được thiết lập
}

include('header.php');  // Bao gồm phần header
include('main.php');    // Bao gồm phần nội dung chính
include('footer.php');  // Bao gồm phần footer
?>