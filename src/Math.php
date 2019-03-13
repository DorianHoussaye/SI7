<?php
//namespace par defaut
namespace App;
class Math{
//fonction qui retourne le double d’un nombre
public static function double($nombre){
return $nombre * 2;
}

//Fonction qui retourne la valeur TTC d'un montant HT
public static function montantTTC($montant){
return $montant * 1.20;
}
}
?>
