<?php

require_once('init.php');

if(!isset($_GET['user_id'])){
    header('Location: rooms.php');
}

$user_id = $_GET['user_id'];

$get_user->DeleteUser($user_id);

$_SESSION['success'] = "User Deleted Successfully";
header('Location: users.php');