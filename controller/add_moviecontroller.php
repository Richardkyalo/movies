<?php 
class add_movie_controller extends add_movie{
    private $movie_name;
    private $movie_description;
    private $movie_url; 
    private $theatre_name;
    private $hours;
    private $minutes;   
    private $charge;
    private $rating;
    private $actor;
    private $cover;
    private $cover_size;
    private $cover_type;
    private $path="../views/add_movie.php";

    public function __construct($movie_name, $mmovie_description, $movie_url, $theatre_name, $hours, $minutes, $chargem, $rating, $actor, $cover, $cover_size, $cover_type) {
        $helper= new helperFunctions();
        $this->movie_name = $helper->emptyInputs($movie_name, $path);
        $this->movie_description = $helper->emptyInputs($movie_description, $path);
        $this->movie_url= $helper->emptyInputs($movie_url, $path);
    }
}