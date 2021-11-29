<?php
require '../src/connexiondata/connexion.php';
class LivreService{

      protected $resultat;

      public $data=array();
      public $basedonne;

      public function __construct()
      {
        $this->shows();
       
        
     }

    public function save()
    {
     $this->resultat=mysqli_query($bdd,"INSERT INTO livre (`id`, `code`, `libelle`, `description`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')");
    }

    public function update(){

    }
//afficher les donnes en format json
    public function shows(){

        $this->basedonne=new connexion();
        
        $code1=mysqli_query($this->basedonne->bdd,"SELECT * FROM `livre`");
        
        while($donnee=mysqli_fetch_assoc($code1))
        {
            extract($donnee);
            $res=Array();
            $res['libelle']=$donnee['libelle'];

            $res['code']=$donnee['code'];

            $res['description']=$donnee['description'];

            $data[] = $res;
            echo $res['libelle'];
        }
        
     return json_encode($data);
    }

    public function delete(){

    }

    public function showon()
    {

    }

 }
?>