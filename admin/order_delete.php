<?php

require_once('init.php');

if(!isset($_GET['order_id'])){
    header('Location: products.php');
}

$order_id = $_GET['order_id'];

$get_order->DeleteOrder($order_id);

$_SESSION['success'] = 'Order deleted successfully';
header('Location: orders.php');