<?php 
if(isset($_POST['submit'])){

    include "../middleware/helperFuncti0ns.php";
    include "../classes/connect.php";
    include "../classes/login.database.php";
    include "../classes/login.controler.php";

    $login= new login_controller($email, $password);
    $login->Isloged();
}