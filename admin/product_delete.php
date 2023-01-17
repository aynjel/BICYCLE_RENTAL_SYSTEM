<?php

require_once('init.php');

if(!isset($_GET['product_id'])){
    header('Location: products.php');
}

$product_id = $_GET['product_id'];

$get_product->DeleteProduct($product_id);

$_SESSION['success'] = 'Product deleted successfully';
header('Location: products.php');