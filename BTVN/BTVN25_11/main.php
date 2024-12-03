<?php
// Đảm bảo biến $products được định nghĩa
$products = isset($_SESSION['products']) ? $_SESSION['products'] : []; // Lấy sản phẩm từ session

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản lý sản phẩm</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Kiểu tùy chỉnh */
        .table-wrapper {
            padding: 20px;
        }
        .actions i {
            font-size: 20px;
            cursor: pointer;
        }
        .actions i:hover {
            color: #007bff;
        }
        .btn-add {
            background-color: #28a745;
            color: white;
            margin-bottom: 10px;
        }
        .btn-add:hover {
            background-color: #218838;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="addProduct.php" class="btn btn-primary mb-3">Thêm Sản Phẩm</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td>
                            <a href="editProduct.php?id=<?= $product['id'] ?>" class="btn btn-warning btn-sm">Sửa</a>
                            <a href="deleteProduct.php?id=<?= $product['id'] ?>" class="btn btn-danger btn-sm">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>