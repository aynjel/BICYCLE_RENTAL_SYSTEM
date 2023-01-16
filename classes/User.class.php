<?php

require_once('Database.class.php');

class User extends Database{
    public function GetUsers(){
        $sql = "SELECT * FROM users WHERE email != 'admin@gmail.com' ORDER BY user_id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function GetUser($id){
        $sql = "SELECT * FROM users WHERE user_id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch();
        return $result;
    }

    public function GetUserOrders($id){
        $sql = "SELECT * FROM orders WHERE user_id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetchAll();
        return $result;
    }

    public function AddUser($name, $email, $password){
        $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$name, $email, $password]);
    }

    public function UpdateUser($id, $name, $email, $password, $role){
        $sql = "UPDATE users SET name = ?, email = ?, password = ?, role = ? WHERE user_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$name, $email, $password, $role, $id]);
    }

    public function DeleteUser($id){
        $sql = "DELETE FROM users WHERE user_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
    }
}