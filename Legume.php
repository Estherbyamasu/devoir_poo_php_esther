<?php
namespace php_aliment\index\Legume;

class legume extends aliment
{
   private $nom;
   private $color;
   private $poids;
   
   public function __constructlegume($nom,$color,$poids)
   {
     parent::__constructaliment($nom,$categorie);
     $this->nom=$nom;
     $this->color=$color;
     $this->poids=$poids; 
   }
   public function getNom()
   {
     return $this->nom;
   }
   public function setNom($nom)
    {
      $this->nom=$nom;
    }
    public function getColor()
   {
     return $this->color;
   }
   public function setColor($color)
    {
      $this->color=$color;
    }
    
    public function getPoids()
   {
     return $this->poids;
   }
   public function setPoids($poids)
    {
      $this->poids=$poids;
    }

    public function affichelegume()
    { 
      parent::affichealiment(); 
      echo "le nom est " . $this->getNom . 
      "mon couleur est" . $this->getColor . 
      " je pese " . $this->getPoids ;
    }
     


  }
  parent::$aliment->affichealiment();
 $legume=new legume("lombee","vert","5kg");
 $legume->affichelegume() ;

?>