<?php

class Database{
    protected $host = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $database = 'bike_db';
    protected $conn;

    public function __construct(){
        try{
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }
}