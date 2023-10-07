<?php
class signup_controller extends signup{
    private $email;
    private $password ;
    private $confirm_password;
    private $path="../views/signup.php";

    public function __construct($email, $password, $confirm_password){
        $helper=new helperFunctions();
        $this->email = $helper->emailFilter($email, $this->path);
        $this->password = $helper->emptyInputs($password, $this->path);
        $this->confirm_password = $helper->emptyInputs($confirm_password, $this->path);
    }

    private function emptyChecker(){
        $response= "";
        if(empty($this->email)||empty($this->password)||empty($this->confirm_password)){
            $response=false;
        }else{
            $response= true;
        }
        return $response;

    }
    private function passwordChecker(){
        $response="";
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->password)){
            $response=false;
        }else{
            $response=true;
        }
        return $response;
    }
    private function confirmPassword(){
        $response="";
        if($this->password!==$this->confirm_password){
            $response=false;
        }else {
            $response=true;
        }
        return $response;
    }
    
    private function UserExists(){
        $response="";
        if($this->checkUser($this->email)){
            $response= false;
        }else{
            $response= true;
        }
        return $response;
    }
    public function signupUser(){
        
       if($this->passwordChecker()==false){
            header("Location:./signup.php? error= invalid password");
            exit();
        }if($this->confirmPassword()==false){
            header("Location:./signup.php? error= Password mismatch");
            exit();
        }if($this->UserExists()==false){
            header("Location:./signup.php? error= User already Exists");
        }else{
            $this->createUser($this->email, $this->password);
        }
 
        
    }
}