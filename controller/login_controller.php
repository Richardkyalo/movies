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
        if ($this->emptyFields()==false) {
            header("Location:./login.php? error= All fields are required");
            exit();
        }
        $this->loginUser($this->email);
    }

    private function emptyFields()
    {
        $response = "";
        if (empty($this->email || $this->password)) {
            $response=false;
        } else {
            $response = true;
        }
        return $response;
    }
}
