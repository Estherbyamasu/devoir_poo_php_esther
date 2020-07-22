<?php

namespace php_aliment\index\Fruit;

class fruit extends aliment
{
   private $nom;
   private $color;

public function __constructfruit($nom,$color)
{
    parent::__constructaliment($nom,$categorie);
    $this->nom=$nom;
    $this->color=$color;
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
public function affichefruit()
{   
    parent::affichealiment();
    echo "son nom est " . $this->getNom() . " et sa couleur " . $this->getColor();
}


}
parent::$aliment->affichealiment();
$Fruit=new fruit("orage","jaune");
$Fruit->affichefruit();

?>