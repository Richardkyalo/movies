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

    public function add_theatre()
    {
        if ($this->theatreExists() == false) {
            header("Location:./addtheatres.php? error= Theatre already Exists");
        }else{
            $this->addtheatre($this->theatre_name, $this->county, $this->town, $this->street, $this->seats, $this->image);
        }
    }
}
