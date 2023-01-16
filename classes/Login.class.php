<?php 

require_once('Database.class.php');

class Login extends Database{
    
    public function checkLogin($email, $password){
        $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$email, $password]);
        $result = $stmt->fetch();
        
        if($result){
            return $result;
        }else{
            return false;
        }
    }

}