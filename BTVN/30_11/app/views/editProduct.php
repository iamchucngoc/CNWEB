<?php include 'C:/xampp/htdocs/php/30_11/app/views/header.php'; ?>
<h2>Sửa Sản Phẩm</h2>

<?php if (isset($currentProduct) && is_array($currentProduct)): ?>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="name" class="form-label">Tên Sản Phẩm</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($currentProduct['name']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Giá</label>
            <input type="number" class="form-control" id="price" name="price" value="<?= htmlspecialchars($currentProduct['price']) ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
    </form>
<?php else: ?>
    <p>Không tìm thấy sản phẩm.</p>
<?php endif; ?>

<?php include 'C:/xampp/htdocs/php/30_11/app/views/footer.php'; ?>