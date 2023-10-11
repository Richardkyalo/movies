<?php
class add_theatre_controller extends add_theatre
{
    private $theatre_name;
    private $county;
    private $town;
    private $street;
    private $seats;
    private $image;
    private $path = "../views/addtheatres.php";

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
    private function filetype()
    {
        $response = "";
        $helper = new helperFunctions();
        if ($helper->file_type($this->image)) {
            $response = true;
        } else {
            $response = false;
        }
        return $response;
    }
    public function add_theatre()
    {
        if ($this->filesize() == false) {
            header("Location" . $this->path . "? error= Wrong file size");
        }
        if ($this->filetype() == false) {
            header("Location:" . $this->path . "? error= Wrong file type");
        }
        if ($this->theatreExists() == false) {
            header("Location:" . $this->path . "? error= Theatre already Exists");
        } else {
            $image_extension = ".jpg";
            $newFileName=bin2hex(random_bytes(5)) . $image_extension;
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
