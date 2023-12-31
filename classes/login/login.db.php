<?php
class login extends database
{
    protected function loginUser($email, $password)
    {
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE email=?");
        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header("Location: ../views/login.php? error= check your cridentials");
            exit();
        }
        if ($stmt->rowcount() > 0) {
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            $roles = $data["roles"];
            $hashed_password= $data['passwords'];
            if(password_verify($password,$hashed_password)){
                session_start();
                if ($roles === "admin") {
                    $stmt = $this->connect()->prepare("SELECT * FROM admins WHERE email=?");
                    if (!$stmt->execute(array($email))) {
                        $stmt = null;
                        header("Location: ../views/login.php? error= check your cridentials");
                        exit();
                    } else {
                        $details = $stmt->fetch(PDO::FETCH_ASSOC);
                        $_SESSION['email'] = $details["email"];
                        $_SESSION["login"] = "OK";
                        header("location:../views/adminRouter.php?page=adminDashboard");
                    }
                }elseif ($roles === "customer") {
                    $stmt = $this->connect()->prepare("SELECT * FROM customers WHERE email=?");
                    if (!$stmt->execute(array($email))) {
                        $stmt = null;
                        header("Location: ../views/login.php? error= check your cridentials");
                        exit();
                    } else {
                        $details = $stmt->fetch(PDO::FETCH_ASSOC);
                        $_SESSION['email'] = $details["email"];
                        $_SESSION["login"] = "OK";
                        header("location:../views/adminRouter.php?page=customersDashboard");
                    }
                } elseif ($roles = "employers") {
                    $stmt = $this->connect()->prepare("SELECT * FROM employers WHERE email=?");
                    if (!$stmt->execute(array($email))) {
                        $stmt = null;
                        header("Location: ../views/login.php? error= check your cridentials");
                        exit();
                    } else {
                        $details = $stmt->fetch(PDO::FETCH_ASSOC);
                        $_SESSION['email'] = $details["email"];
                        $_SESSION["login"] = "OK";
                        header("location:../views/adminRouter.php?page=employerDashboard");
                    }
                } elseif ($roles = "super_admin") {
                    $stmt = $this->connect()->prepare("SELECT * FROM super_admins WHERE email=?");
                    if (!$stmt->execute(array($email))) {
                        $stmt = null;
                        header("Location: ../views/login.php? error= check your cridentials");
                        exit();
                    } else {
                        $details = $stmt->fetch(PDO::FETCH_ASSOC);
                        $_SESSION['email'] = $details["email"];
                        $_SESSION["login"] = "OK";
                        header("location:../views/adminRouter.php?page=super_adminDashboard");
                    }
                }
            }else{
                header("Location:../views/login.php? error=invalid details.");
            }
            
        }else{
            header("Location:../views/login.php? error= Login failed");
        }
    }
}
