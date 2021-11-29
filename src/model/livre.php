<?php


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


