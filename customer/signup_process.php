<?php 

require_once('init.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $name = $_POST['name'];

    $register = new Register();
    $result = $register->checkEmail($email);

    if($result){
        $_SESSION['error'] = "Email already exists";
        header('location: index.php');
    }else{
        if($password == $confirm_password){
            $register->registerUser($email, $password, $name);
            $_SESSION['success'] = "Registration successful";
            header('location: index.php');
        }else{
            $_SESSION['error'] = "Password does not match";
            header('location: index.php');
        }
    }
}else{
    header('location: index.php');
}