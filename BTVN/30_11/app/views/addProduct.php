<?php include 'C:/xampp/htdocs/php/30_11/app/views/header.php'; ?>
<h2>Thêm Sản Phẩm</h2>
<form method="POST" action="">
    <div class="mb-3">
        <label for="name" class="form-label">Tên Sản Phẩm</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Giá</label>
        <input type="number" class="form-control" id="price" name="price" required>
    </div>
    <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
</form>
<?php include 'footer.php'; ?>