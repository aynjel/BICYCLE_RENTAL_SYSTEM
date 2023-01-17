<?php 

require_once('init.php');

if(!isset($_GET['product_id'])){
    header('location: index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $product_id = $_GET['product_id'];
    $user_id = $user['user_id'];
    $payment_method = $_POST['payment_method'];

    $get_order->AddOrder($user_id, $product_id, $payment_method);

    $_SESSION['success'] = 'Order added successfully';
    header('location: order.php?product_id='.$product_id);
}
