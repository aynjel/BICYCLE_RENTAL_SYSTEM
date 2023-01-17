<?php
error_reporting(0);
session_start();

require_once('../classes/Autoloader.php');
$get_user = new User();
$get_products = new Product();
$get_order = new Order();

if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
    $orders = $get_order->GetCustomerOrders($user['user_id']);
    $products = $get_products->getProducts();
}



