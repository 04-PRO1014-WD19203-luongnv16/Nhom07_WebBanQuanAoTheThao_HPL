<?php
/**
 * Mở kết nối đến CSDL sử dụng PDO
 */
function pdo_get_connection() {
    $dbURL = 'mysql:host=localhost;dbname=du_1;charset=utf8';
    $username = 'root';
    $password = '';
    $conn = new PDO($dbURL, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}