<?php
class login_controller extends login
{
    private $email;
    private $password;
    private $path="../views/login.php";
    public function __construct($email, $password)
    {
        $helper=new helperFunctions();
        $this->email = $helper->emailFilter($email, $this->path);
        $this->password = $helper->emptyInputs($password, $this->path);
    }
    public function Isloged(){
        $this->loginUser($this->email,$this->password);
    }
}
