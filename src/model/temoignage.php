<?php
require '..\..\vendor\autoload.php';

class TemoignageModel
{
  
    protected $code;

    private $description;
    private $lien;

    public function __construct($code,$lien,$description){
        $this->code=$code;
        $this->lien=$lien;
        $this->description=$description;
      
    }
     
}