<?php
// Model 
require_once "model/pdo.php";
require_once "model/taikhoan.php";
require_once "model/category.php";
require_once "model/product.php";
require_once "model/statistical.php";
// Controller
require_once "controller/account_controller.php";
require_once "controller/404_controler.php";
require_once "controller/register.php";
require_once "controller/login.php";
require_once "controller/home_controller.php";
require_once "controller/product_controller.php";
require_once "controller/controller.php";
require_once "controller/category_controller.php";
require_once "controller/main.php";
require_once "controller/sanpham_ct.php";
if (!isset($_SESSION['email'])) {
    $_SESSION['email'] = [];
}
$act = isset($_GET['act']) ? $_GET['act'] : '/';
switch ($act) {
    case "/":
    case 'main':
        main();
        break;
    case 'sanpham_ct':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            new_sanphamct($id);
        }
        break;
    case 'all_products':
        list_products();
        break;
    case 'man_clothes':
        man_list();
        break;
    case 'woman_clothes':
        woman_list();
        break;
    case 'home_admin':
        home_admin();
        break;
    case 'setting_account_update':
        update_user_ctr();
        break;
    case 'setting_account':
        setting_acount();
        break;
    case 'result_search_products':
        results_search();
        break;
    case 'register_admin':
        register_admin();
        break;
    case 'register':
        register();
        break;
    case 'login_admin_account':
        login_admin_ctr();
        break;
    case 'login_admin':
        login_admin();
        break;
    case 'delete_staff':
        delete_staff_ctr();
        break;
    case 'delete_user':
        delete_user_ctr();
        break;
    case 'login':
        login();
        break;
    case 'lienhe':
        feed_back();
        break;
    case 'login_account':
        login__user_ctr();
        break;
    case 'exits_account':
        logout_admin();
        break;
    case '1':
        unset($_SESSION['email']);
        header("Location: index.php?act=main");
        break;
    case 'register_account':
        register_user_ctr();
        break;
    case 'delete_product':
        delete_product_ctr();
        break;
    case 'add_product':
        add_product_ctr();
        break;
    case 'save_add_product':
        insert_product_ctr();
        break;
    case 'show_product_admin':
        product_ctr();
        break;
    case 'show_category_admin':
        category_ctr();
        break;
    case 'chinh_sach':
        policy();
        break;
    case 'edit_customer':
        edit_customer_ctr();
        break;
    case 'edit_staff':
        edit_staff_ctr();
        break;
    case 'edit_product':
        edit_product_ctr();
        break;
    case 'update_customer':
        update_customer_ctr();
        break;
    case 'update_staff':
        update_staff_ctr();
        break;
    case 'update_product':
        update_product_ctr();
        break;
    case 'update_category':
        update_category_ctr();
        break;
    case 'edit_category':
        edit_category_ctr();
        break;
    case 'add_category':
        add_category_ctr();
        break;
    case 'delete_category':
        delete_category_ctr();
        break;
    case 'save_add_category':
        insert_category_ctr();
        break;
    default:
        show_404();
        break;
}
