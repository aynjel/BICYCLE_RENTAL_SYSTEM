<?php 

require_once('init.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $status = $_POST['status'];
    $order_id = $_POST['order_id'];

    $update_order = new Order();
    $update_order->UpdateOrderStatus($order_id, $status);
    $_SESSION['success'] = 'Order status updated successfully';
    header('Location: orders.php');
}else{
    header('Location: index.php');
}