<?php
namespace php_aliment\index\Aliment;
class aliment
{
    private  $nom;
    private $categorie;

    public function __constructaliment($nom,$categorie)
    {
        $this->nom=$nom;
        $this->categorie=$categorie;
    }
    public function getNom()
    {
        return $this->$nom;
    }
    public function setNom($nom)
    {
        $this->nom=$nom; 
    }
    public function getCategorie()
    {
        return $this->$categorie;
    }
    public function setCategorie($categorie)
    {
        $this->categorie=$categorie; 
    }
public function affichealiment()
{
    echo "le nom des aliments sont" . $this->getNom . 
    "et leur categorie" . $this->getCategorie;
}

}
$aliment=new aliment("legume","legume secs");
$aliment->affichealiment(); 

?>