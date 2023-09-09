<?php 
class helperFunctions{

    public function emptyInputs($input, $error_message){
        $response="";
        if(empty($input)){
            header("Location:../../views/login.php");
            exit();
        }else{
            $response=true;
        }
        return $response;
    }
    public function filterData($input){
        $response="";
        $response= stripslashes(htmlspecialchars($input));
        return $response;
    }
}