<?php
session_start();
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = []; // Khởi tạo mảng sản phẩm nếu chưa được thiết lập
}
?>