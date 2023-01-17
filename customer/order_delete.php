<?php

require_once('init.php');

if(!isset($_GET['order_id'])){
    header('Location: index.php');
}

$order_id = $_GET['order_id'];

$get_order->DeleteOrder($order_id);

$_SESSION['success'] = 'Order deleted successfully';
header('Location: order.php?order_id='.$order_id);