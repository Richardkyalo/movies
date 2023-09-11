<?php
class login_controller extends login
{
    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }
    public function Isloged()
    {
        if($response=true){
            $this -> loginUser($this->email); 
        }
    }

    public function emptyFields()
    {
        $response = "";
        if (empty($this->email || $this->password)) {
            header("Location:../../login.php error= check your cridentials");
            exit();
        }
        $response = true;
    }
    public function emailChecker()
    {
        $response = "";
        $user = $entityManager->getRepository(User::class)->find($this->$email);
        if ($user) {
            $response = true;
        } else {
            header("Location:../../login.php error= check your cridentials"); //return error
            exit();
        }
        return $response;
    }
    public function passwordChecker()
    {
        $response = "";
        $user = $entityManager->getRepository(User::class)->find($this->$email);
        if ($user) {
            $hashedpassword = $user->getPassword();
            if (password_verify($this->password, $hashedpassword)) {
                $response = true;
            } else {
                header("Location:../../login.php error= check your cridentials"); //return error
                exit();
            }
        } else {
            header("Location:../../login.php error= check your cridentials");
            exit();
        }
        return $response;
    }
}
