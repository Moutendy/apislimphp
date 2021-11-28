<?php
require '..\..\vendor\autoload.php';

class ContactModel
{
  
    protected $code;
    protected $libelle;
    private $description;
    private $lien;

    public function __construct($code,$libelle,$description){
        $this->code=$code;
        $this->libelle=$libelle;
        $this->description=$description;
      
    }
     
}