<?php 
class helperFunctions{
    public $empty="all fields are required";
    public $invalid_mail="invalid email";
    public function emptyInputs($input, $path){
        $response="";
        if(empty($input)){
            header("Location:".$path."? error=".$this->empty);
            exit();
        }else{
            $response=true;
        }
        return $response;
    }
    public function emailFilter($input, $path){
        $this->emptyInputs($input, $path);
        $response="";
        if(!filter_var($input, FILTER_VALIDATE_EMAIL)){
            header("Location:".$path."? error=".$this->invalid_mail);
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