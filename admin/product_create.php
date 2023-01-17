<?php 
session_start();

require_once('../classes/Product.class.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $type = $_POST['type'];

    $product = new Product();
    move_uploaded_file($image_tmp, "../images/products/" . $image);
    $product->AddProduct($name, $description, $price, $image, $type);
    $_SESSION['success'] = "Product added successfully";
    header('Location: products.php');
}else{
    header('Location: products.php');
}