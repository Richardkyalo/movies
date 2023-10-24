<?php
class helperFunctions
{
    public $empty = "all fields are required";
    public $invalid_mail = "invalid email";
    public function emptyInputs($input, $path)
    {
        $response = "";
        if (empty($input)) {
            header("Location:" . $path . "? error=" . $this->empty);
            exit();
        } else {
            $response = true;
        }
        return $response;
    }
    public function emailFilter($input, $path)
    {
        $this->emptyInputs($input, $path);
        $response = "";
        if (!filter_var($input, FILTER_VALIDATE_EMAIL)) {
            header("Location:" . $path . "? error=" . $this->invalid_mail);
            exit();
        } else {
            $response = true;
        }
        return $response;
    }
    public function image_size($input)
    {
        $response = "";
        if ($input > 6000000) {
            $response = false;
        } else {
            $response = true;
        }
        return $response;
    }
    // public function file_type($input){
    //     $response="";
    //     $extension=strtolower(pathinfo($input,PATHINFO_EXTENSION));
    //     if($extension=="jpeg"||$extension=="jpg"||$extension=="png"){
    //         $response=true;
    //     }else{
    //         $response=false;
    //     }
    //     return $response;
    // }
    public function checkFileExtension($input, $allowedExtensions)
    {
        $parts = explode('.', $input);
        $fileExtension = strtolower(end($parts));
        $response = "";
        if (in_array($fileExtension, $allowedExtensions)) {
            $response = true;
        } else {
            $response = false;
        }
        echo $fileExtension;
        return $response;
    }

    // Example usage:

    // $inputName = 'file_upload';

    // if (checkFileExtension($inputName, $allowedExtensions)) {
    //     echo 'File extension is allowed.';
    // } else {
    //     echo 'File extension is not allowed.';
    // }

    public function filterData($input)
    {
        $response = "";
        $response = stripslashes(htmlspecialchars($input));
        return $response;
    }
}
