<?php
require 'nhom7';

$product_id = $_GET['id'];
$stmt = $pdo->prepare('DELETE FROM products WHERE product_id = ?');
$stmt->execute([$product_id]);

header('Location: index.php');
?>