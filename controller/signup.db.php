<?php 
class signup extends database{
    protected function checkUser($email){
        $stmt=$this->connect()->prepare("SELECT * FROM users WHERE email=?");

        if($stmt->execute(array($email))){
            $stmt=null;
            header("Location: ../views/signup.php");
            exit();
        }
            $response="";
            if($stmt->rowCount()>0){
                $response=false;
            }else{
                $response=true;
        }
        return $response;
    }
    protected function createUser($email, $password){
        $stmt=$this->connect()->prepare("INSERT INTO users(email, roles) values(?,?)");
        $hasshed_password= password_hash($password, PASSWORD_DEFAULT);
        $roles="customer";
        if($stmt->execute(array($email,$roles))){
            $stmt=null;
            header("Location: ../views/login.php");
            exit();
        }
        $stmt=null;
    }
}