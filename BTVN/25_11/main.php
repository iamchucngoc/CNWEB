<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap CRUD Data Table for Database with Modal Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Custom styles */
        .table-wrapper {
            padding: 20px;
        }

        .navbar-nav {
            padding-left: 0;
            margin-bottom: 0;
        }

        .navbar-nav > li > a {
            padding: 10px 20px;
        }

        .navbar-nav {
            float: left;
        }

        /* Styling for the icons */
        .actions i {
            font-size: 20px;
            cursor: pointer;
        }

        .actions i:hover {
            color: #007bff;
        }

        /* Custom button for Add New */
        .btn-add {
            background-color: #28a745; /* Green color */
            color: white;
            margin-bottom: 10px; /* Giảm khoảng cách dưới nút */
        }

        .btn-add:hover {
            background-color: #218838;
            color: white;
        }

        /* Giảm margin trên và dưới của navbar */
        .navbar {
            margin-bottom: 0; /* Bỏ khoảng cách dưới navbar */
            padding-bottom: 0; /* Bỏ padding dưới navbar */
        }

        /* Giảm margin dưới của phần table-wrapper */
        .table-wrapper {
            margin-top: 0; /* Bỏ khoảng cách trên của phần bảng */
        }

        /* In đậm nội dung cột "Sản phẩm" */
        .table th:nth-child(1), .table td:nth-child(1) {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
    <a href="addProduct.php" class="btn btn-primary mb-3">Add Product</a>
    <table class="table table-bordered">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td>
                        <a href="editProduct.php?id=<?= $product['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="deleteProduct.php?id=<?= $product['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
            </div>
        </div>
    </div>

   
       
   


 



</body>
</html>
