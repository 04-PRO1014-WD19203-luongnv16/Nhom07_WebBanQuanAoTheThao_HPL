<?php
require 'nhom7';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $main_image_url = $_POST['main_image_url'];
    $hover_main_image_url = $_POST['hover_main_image_url'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $gender = $_POST['gender'];
    $description = $_POST['description'];
    $code = $_POST['code'];
    $category_id = $_POST['category_id'];
    $status = $_POST['status'];

    $stmt = $pdo->prepare('INSERT INTO products (product_name, main_image_url, hover_main_image_url, product_price, discount, gender, product_desc, product_code, category_id, product_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$name, $main_image_url, $hover_main_image_url, $price, $discount, $gender, $description, $code, $category_id, $status]);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Thêm sản phẩm mới</h1>
        <form method="post">
            <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="main_image_url">URL hình ảnh chính</label>
                <input type="text" id="main_image_url" name="main_image_url" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="hover_main_image_url">URL hình ảnh hover</label>
                <input type="text" id="hover_main_image_url" name="hover_main_image_url" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="price">Giá</label>
                <input type="number" id="price" name="price" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="discount">Giảm giá</label>
                <input type="number" id="discount" name="discount" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="gender">Giới tính</label>
                <input type="number" id="gender" name="gender" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Mô tả</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="code">Mã sản phẩm</label>
                <input type="text" id="code" name="code" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="category_id">Mã danh mục</label>
                <input type="number" id="category_id" name="category_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="status">Trạng thái</label>
                <input type="number" id="status" name="status" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
        </form>
    </div>
</body>
</html>