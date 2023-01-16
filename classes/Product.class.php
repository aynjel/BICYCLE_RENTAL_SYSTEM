<?php

require_once('Database.class.php');

class Product extends Database{
    public function GetProducts(){
        $sql = "SELECT * FROM products";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll();
        return $products;
    }

    public function GetProduct($id){
        $sql = "SELECT * FROM products WHERE product_id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        $product = $stmt->fetch();
        return $product;
    }

    public function AddProduct($name, $description, $price, $image, $type){
        $sql = "INSERT INTO products (name, description, price, image, type) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$name, $description, $price, $image, $type]);
    }

    public function UpdateProduct($id, $name, $description, $price, $image, $type){
        $sql = "UPDATE products SET name = ?, description = ?, price = ?, image = ?, type = ? WHERE product_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$name, $description, $price, $image, $type, $id]);
    }

    public function DeleteProduct($id){
        $sql = "DELETE FROM products WHERE product_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
    }
}