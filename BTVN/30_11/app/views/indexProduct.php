<?php include 'C:/xampp/htdocs/php/30_11/app/views/header.php'; ?>
<a href="/add" class="btn btn-primary mb-3">Thêm Sản Phẩm</a>
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
                    <a href="/edit?id=<?= $product['id'] ?>" class="btn btn-warning btn-sm">Sửa</a>
                    <a href="/delete?id=<?= $product['id'] ?>" class="btn btn-danger btn-sm">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php include 'footer.php'; ?>