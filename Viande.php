<?php

namespace php_aliment\index\Viande;

class viande extends aliment
{
  private $nom;
  private $categorie;
  private $poids;

  public function __constructviande($nom,$categorie,$poids)
  {
    parent::__constructaliment($nom,$categorie);
    $this->nom=$nom;
    $this->categorie=$categorie;
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
   public function getCategorie()
  {
    return $this->categorie;
  }
  public function setColor($categorie)
   {
     $this->categorie=$categorie;
   }
   
   public function getPoids()
  {
    return $this->poids;
  }
  public function setPoids($poids)
   {
     $this->poids=$poids;
   }

   public function afficheviande()
   {
    parent::affichealiment();
     echo "le nom de la viande est " .$this->getNom(). 
     "ma categorie" . $this->getCategorie() . 
     "et je pese " . $this->getPoids();
   }

}
parent::$aliment->affichealiment();
$viande=new viande("chevre","roti","45");
$viande->afficheviande();

?>