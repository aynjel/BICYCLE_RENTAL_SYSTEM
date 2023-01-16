<?php 

require_once('Database.class.php');

class Register extends Database{

    public function registerUser($email, $password, $name){
        $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$name, $email, $password]);
    }

    public function checkEmail($email){
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$email]);
        $result = $stmt->fetch();
        return $result;
    }

}