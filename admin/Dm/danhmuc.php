<?php
require 'nhom7';

$stmt = $pdo->query('SELECT * FROM products');
$products = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh mục sản phẩm</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Danh mục sản phẩm</h1>
        <a href="add_product.php" class="btn btn-success">Thêm sản phẩm mới</a>
        <div class="product-list">
            <?php foreach ($products as $product): ?>
                <div class="product">
                    <img src="<?php echo htmlspecialchars($product['main_image_url']); ?>" alt="<?php echo htmlspecialchars($product['product_name']); ?>">
                    <h2><?php echo htmlspecialchars($product['product_name']); ?></h2>
                    <p>Giá: <?php echo number_format($product['product_price']); ?> VND</p>
                    <p>Mã sản phẩm: <?php echo htmlspecialchars($product['product_code']); ?></p>
                    <a href="product_detail.php?id=<?php echo $product['product_id']; ?>" class="btn btn-primary">Chi tiết</a>
                    <a href="edit_product.php?id=<?php echo $product['product_id']; ?>" class="btn btn-warning">Sửa</a>
                    <a href="delete_product.php?id=<?php echo $product['product_id']; ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xóa</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>