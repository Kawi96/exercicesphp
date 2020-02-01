<?php 
$age_du_visiteur = 17;
$age_du_visiteur = 23;

$nombre = 3 * 2;
echo $nombre ; //Variable opération (le nombre6 apparaitra avant les autres)

/* écriture en plusieurs lignes*/
echo "Le visiteur a :";
echo $age_du_visiteur ;
echo " ans !";

/* Deux méthodes de concaténation*/
echo "Le visiteur a $age_du_visiteur ans !"; //Nom de varable directement dans le texte : Marche seulement avec les "" (et pas avec '')


$mickey = 12;
echo 'Le visiteur a ' . $mickey . ' ans' ; //Concaténation avec des . (obligatoire quand on utilise '')


//$nombre = 3 * 2 ;
//echo $nombre ;

?>