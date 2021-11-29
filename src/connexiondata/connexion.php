<?php
class connexion{

    public $bdd;

    public function __construct(){

       $this->bdd=mysqli_connect("localhost","root","","apiphp") or die(mysqli_connect_error());
        

    }
}


?>