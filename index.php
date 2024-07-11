<?php   
    // Đây là Model
require_once "model/taikhoan.php";
require_once "model/product.php";
require_once "model/category.php";


    // Đây là Controller
require_once "controller/main.php";
require_once "controller/login.php";
require_once "controller/product_controller.php";

if(!isset($_SESSION['email'])){
    $_SESSION['email']=[];
}
$act = isset($_GET['act']) ? $_GET['act'] : '/';
    switch ($act) {
        case "/":
        case 'main':
        //main();
        break;
    }
?>  