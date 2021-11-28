<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '..\..\vendor\autoload.php';
class LivreModel
{
  
    protected $code;
    private $libelle;
    private $description;

    public function __construct($code,$libelle,$description){
        $this->code=$code;
        $this->libelle=$libelle;
        $this->description=$description;
    }
     
}

?>


