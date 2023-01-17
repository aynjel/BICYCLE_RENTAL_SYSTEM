<?php

session_start();

require_once('../classes/Order.class.php');
require_once('../classes/Product.class.php');
require_once('../classes/User.class.php');

if(!isset($_SESSION['admin'])){
    header('Location: auth/signin.php');
}

$admin = $_SESSION['admin'];

$get_user = new User();
$users = $get_user->GetUsers();

$get_order = new Order();
$orders = $get_order->GetOrders();

$get_product = new Product();
$products = $get_product->GetProducts();
