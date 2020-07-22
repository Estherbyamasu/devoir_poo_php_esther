
<?php

include_once "index/aliment.php";
include_once "index/legume.php";
include_once "index/viande.php";
include_once "index/fruit.php";

use php_aliment\index\Aliment\aliment;
use php_aliment\index\Legume\legumet;
use php_aliment\index\Viande\viande;
use php_aliment\index\Fruit\fruit;


parent::$aliment->affichealiment();
echo '<br>';
$Fruit=new fruit("orage","jaune");
$Fruit->affichefruit();
echo '<br>';
$legume=new legume("lombee","vert","5kg");
$legume->affichelegume() ;
echo '<br>';
$viande=new viande("chevre","roti","45");
$viande->afficheviande();
?>