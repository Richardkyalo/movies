<?php
class add_theatre_controller extends add_theatre
{
    private $theatre_name;
    private $county;
    private $town;
    private $street;
    private $seats;
    private $image;
    private $path = "./addtheatres.php";
    private $allowedExtensions = ['jpeg', 'jpg', 'png'];

    public function __construct($theatre_name, $county, $town, $street, $seats, $image)
    {
        $helper = new helperFunctions();
        $this->theatre_name = $helper->emptyInputs($theatre_name, $this->path);
        $this->county = $helper->emptyInputs($county, $this->path);
        $this->town = $helper->emptyInputs($town, $this->path);
        $this->street = $helper->emptyInputs($street, $this->path);
        $this->seats = $helper->emptyInputs($seats, $this->path);
        $this->image = $helper->emptyInputs($image, $this->path);
    }
    private function theatreExists()
    {
        $response = "";
        if ($this->checkTheatre($this->theatre_name)) {
            $response = false;
        } else {
            $response = true;
        }
        return $response;
    }
    private function filesize()
    {
        $response = "";
        $helper = new helperFunctions();
        if ($helper->image_size($this->image) == true) {
            $response = true;
        } else {
            $response = false;
        }
        return $response;
    }
    public function checkimages()
    {
        $response="";
        $maxImages = 4;
        $uploadedImagesCount = count($_FILES['images']['name']);
        if ($uploadedImagesCount==$maxImages) {
            // for ($i = 0; $i < $uploadedImagesCount; $i++) {
            //     $fileName = $_FILES['images']['name'][$i];
            //     $tempFile = $_FILES['images']['tmp_name'][$i];
            //     $targetFile = $uploadDirectory . $fileName;
    
            //     if (move_uploaded_file($tempFile, $targetFile)) {
            //         echo "File '$fileName' was uploaded successfully.<br>";
            //     } else {
            //         echo "Error uploading file '$fileName'.<br>";
            //     }
            // }
            $response=true;
        } else {
            $response=false;
        }
        return $response;
    }
    public function add_theatre()
    {
        if ($this->filesize() == false) {
            header("Location" . $this->path . "? error= Wrong file size");
        }
        if ($this->checkimages() == false) {
            header("Location:" . $this->path . "? error= Upload 4 images");
        }
        if ($this->theatreExists() == false) {
            header("Location:" . $this->path . "? error= Theatre already Exists");
        } else {
            $image_extension = ".jpg";
            $newFileName = bin2hex(random_bytes(5)) . $image_extension;
            if (
                $this->addtheatre($this->theatre_name, $this->county, $this->town, $this->street, $this->seats, $this->image) &&
                move_uploaded_file($this->image, __DIR__ . "../views/images/" . $newFileName)
            ) {
                header("Location: ../views/admintheatres.php");
                exit();
            } else {
                header("Location:./addtheatres.php");
            }
        }
    }
}
