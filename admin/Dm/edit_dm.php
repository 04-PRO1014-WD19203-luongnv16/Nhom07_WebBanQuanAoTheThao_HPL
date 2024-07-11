<?php
require 'nhom7';

$product_id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM products WHERE product_id = ?');
$stmt->execute([$product_id]);
$product = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $code = $_POST['code'];
    $stmt = $pdo->prepare('UPDATE products SET product_name = ?, product_price = ?, product_desc = ?, product_code = ? WHERE product_id = ?');
    $stmt->execute([$name, $price, $description, $code, $product_id]);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sửa sản phẩm</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Sửa sản phẩm</h1>
        <form method="post">
            <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo htmlspecialchars($product['product_name']); ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Giá</label>
                <input type="number" id="price" name="price" class="form-control" value="<?php echo htmlspecialchars($product['product_price']); ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Mô tả</label>
                <textarea id="description" name="description" class="form-control" required><?php echo htmlspecialchars($product['product_desc']); ?></textarea>
            </div>
            <div class="form-group">
                <label for="code">Mã sản phẩm</label>
                <input type="text" id="code" name="code" class="form-control" value="<?php echo htmlspecialchars($product['product_code']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
</body>
</html>