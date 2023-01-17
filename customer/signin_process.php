<?php 
require_once('init.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = new Login();
    $result = $login->checkLogin($email, $password);

    if($result){
        $_SESSION['user'] = $result;
        $_SESSION['success'] = "Login successful";
        header('location: index.php');
    }else{
        $_SESSION['error'] = "Invalid email or password";
        header('location: index.php');
    }
}else{
    header('location: index.php');
}