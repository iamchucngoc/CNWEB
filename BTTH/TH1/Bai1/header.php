<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    

    <div class="header" style="display: inline-block">
        <button type="button" class="btn btn-success" id="addButton">Thêm</button>
        <button type="button" class="btn btn-success" id="editButton">Sửa</button>
        <button type="button" class="btn btn-danger" id="deleteButton">Xóa</button>
    </div>
</nav>

<!-- Form for adding flower -->
<div id="addFlowerForm" style="display: none; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; border: 1px solid #ccc; z-index: 1000;">
    <h3>Thêm Hoa</h3>
    <form>
        <div class="mb-3">
            <label for="flowerName" class="form-label">Tên Hoa</label>
            <input type="text" class="form-control" id="flowerName" required>
        </div>
        <div class="mb-3">
            <label for="flowerDescription" class="form-label">Mô Tả</label>
            <input type="text" class="form-control" id="flowerDescription" required>
        </div>
        <div class="mb-3">
            <label for="flowerImage" class="form-label">Ảnh</label>
            <input type="file" class="form-control" id="flowerImage" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
        <button type="button" class="btn btn-secondary" id="cancelAddButton">Hủy</button>
    </form>
</div>

<!-- Form for editing flower -->
<div id="editFlowerForm" style="display: none; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; border: 1px solid #ccc; z-index: 1000;">
    <h3>Sửa Hoa</h3>
    <form>
        <div class="mb-3">
            <label for="editFlowerName" class="form-label">Tên Hoa</label>
            <input type="text" class="form-control" id="editFlowerName" required>
        </div>
        <div class="mb-3">
            <label for="editFlowerDescription" class="form-label">Mô Tả</label>
            <input type="text" class="form-control" id="editFlowerDescription" required>
        </div>
        <div class="mb-3">
            <label for="editFlowerImage" class="form-label">Ảnh</label>
            <input type="file" class="form-control" id="editFlowerImage" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
        <button type="button" class="btn btn-secondary" id="cancelEditButton">Hủy</button>
    </form>
</div>

<!-- Form for deleting flower -->
<div id="deleteFlowerForm" style="display: none; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; border: 1px solid #ccc; z-index: 1000;">
    <h3>Xóa Hoa</h3>
    <form>
        <div class="mb-3">
            <label for="deleteFlowerName" class="form-label">Tên Hoa</label>
            <input type="text" class="form-control" id="deleteFlowerName" required>
        </div>
        <button type="submit" class="btn btn-danger">Xóa</button>
        <button type="button" class="btn btn-secondary" id="cancelDeleteButton">Hủy</button>
    </form>
</div>

<!-- JavaScript to handle button clicks -->
<script>
    document.getElementById('addButton').addEventListener('click', function() {
        document.getElementById('addFlowerForm').style.display = 'block';
        document.getElementById('editFlowerForm').style.display = 'none'; // Ẩn form sửa
        document.getElementById('deleteFlowerForm').style.display = 'none'; // Ẩn form xóa
    });

    document.getElementById('editButton').addEventListener('click', function() {
        document.getElementById('editFlowerForm').style.display = 'block';
        document.getElementById('addFlowerForm').style.display = 'none'; // Ẩn form thêm
        document.getElementById('deleteFlowerForm').style.display = 'none'; // Ẩn form xóa
    });

    document.getElementById('deleteButton').addEventListener('click', function() {
        document.getElementById('deleteFlowerForm').style.display = 'block';
        document.getElementById('addFlowerForm').style.display = 'none'; // Ẩn form thêm
        document.getElementById('editFlowerForm').style.display = 'none'; // Ẩn form sửa
    });

    document.getElementById('cancelAddButton').addEventListener('click', function() {
        document.getElementById('addFlowerForm').style.display = 'none';
    });

    document.getElementById('cancelEditButton').addEventListener('click', function() {
        document.getElementById('editFlowerForm').style.display = 'none';
    });

    document.getElementById('cancelDeleteButton').addEventListener('click', function() {
        document.getElementById('deleteFlowerForm').style.display = 'none';
    });
</script>
