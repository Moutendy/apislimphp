<?php
require '..\..\vendor\autoload.php';

class PresentationModel
{
  
    protected $code;
    private $libelle;
    private $description;
    private $lien;

    public function __construct($code,$libelle,$description,$lien){
        $this->code=$code;
        $this->libelle=$libelle;
        $this->description=$description;
        $this->lien=$lien;
    }
     
}