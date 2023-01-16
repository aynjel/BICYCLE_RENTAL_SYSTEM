<?php

require_once('Database.class.php');

class Order extends Database{
    public function GetOrders(){
        $sql = "SELECT * FROM orders INNER JOIN products ON orders.product_id = products.product_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $bookrooms = $stmt->fetchAll();
        return $bookrooms;
    }

    public function GetCustomerOrders($id){
        $sql = "SELECT * FROM orders INNER JOIN products ON orders.product_id = products.product_id WHERE user_id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        $bookrooms = $stmt->fetchAll();
        return $bookrooms;
    }

    public function GetOrder($id){
        $sql = "SELECT * FROM orders WHERE order_id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        $bookroom = $stmt->fetch();
        return $bookroom;
    }

    public function AddOrder($user_id, $product_id, $payment_method){
        $sql = "INSERT INTO orders (user_id, product_id, payment_method) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$user_id, $product_id, $payment_method]);
    }

    public function UpdateOrderStatus($id, $status){
        $sql = "UPDATE orders SET status = ? WHERE order_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$status, $id]);
    }

    public function DeleteOrder($id){
        $sql = "DELETE FROM orders WHERE order_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
    }
}