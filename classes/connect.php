<?php
class database {
    private $stmt;
    protected function connect(){
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'movies';
        try {
            return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
            
        } catch (PDOException $exception) {
            exit('Failed to connect to database!');
        }
//     }
//  function test(){
// $stmt=$this->connect()->prepare("SELECT * FROM users");
// $users = $stmt->execute();
// if($users){
//     $details=$stmt->fetch(PDO::FETCH_ASSOC);
//     echo($details["email"]);
// }

 }

}
// $trial= new database();
// $trial->test()