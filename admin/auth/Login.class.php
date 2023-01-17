<?php
session_start();

require_once('../../classes/Database.class.php');

class Login extends Database{
    public function LoginAdmin($email, $password){
        $sql = "SELECT * FROM admin WHERE email = ? AND password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$email, $password]);
        $result = $stmt->fetch();

        if($result){
            $_SESSION['admin'] = $result;
            return true;
        }else{
            return false;
        }
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $login = new Login();
        $result = $login->LoginAdmin($email, $password);

        if($result){
            $_SESSION['success'] = "Login Success";
            header('Location: ../index.php');
        }else{
            $_SESSION['error'] = "Login Failed";
            header('Location: signin.php');
        }
    }
}