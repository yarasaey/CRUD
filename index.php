<?php  
session_start();
require_once "./config/DB_connection.php";
include './inc/header.php';


if(isset($_GET['page'])){
    switch ($_GET['page']) {
        case 'home':
            include "./view/home.php";
        break;
        case 'category':
            include "./view/categories.php";
        break;
        case "create_category":
            include "./controller/category/store_category.php";
        break;
        case "edit_category":
            include "./view/edit_category.php";
        break;
        case "update_category":
            include "./controller/category/update_category.php";
        break;
        case "delete_category":
            include "./controller/category/delete_category.php";
        break;
        case "add_product":
            include "./view/add_product.php";
        break;
        case "store_product":
            include "./controller/product/store_product.php";
        break;
        case "delete_product":
            include "./controller/product/delete_product.php";
        break;
    }
}else{
    include "./view/home.php"; 
}





include './inc/footer.php';


