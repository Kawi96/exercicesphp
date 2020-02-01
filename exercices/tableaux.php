<h1>Création de tableaux</h1>
<?php
$prenoms = array ('François', 'Michel', "Rénée<br/>", "Jacky"); //forme simple de tableaux

//Forme "manuel" d'écriture d'un tableau
$prenoms2 [] = "François"; // ou $prenoms2 [0] = "François";
$prenoms2 [] = "Micheline<br/>"; // ou $prenoms2 [1] = "Micheline";
$prenoms2 [] = "Joseph"; // ou $prenoms2 [2] = "Joseph";

echo $prenoms[2]; //rappel : on commence à 0 et pas à 1
echo $prenoms2[1];

//Tableaux associatifs
$coordonnees = array(
	'prenom' => 'François', //Ici la disposition de passage à la ligne est seulement esthétique (on pourrait écrire : = array('' => ,'' => ,'' => ,);
	'nom' => 'Dupont', 
	'adresse' => '3 rue Pintadon Dugras', 
	'ville' => 'Marseille',) ; //ne pas oublier le ; à la fin

echo $coordonnees['adresse'];

?> <br/><br/> <?php // passage de ligne simplement esthetique pour afficher le tableau (on notera le saut de ligne de Rénée).

//Imprimer un array numérique entierement avec FOR

for ($numero = 0; $numero < 4; $numero++ )
{
	echo $prenoms[$numero] . '<br/>';
}

foreach ($prenoms as $element) {

	echo $element . '<br/>';
}

//Tableau à condition condenssé (très utile !!!) : Utilise une variable "clée" en plus de l'élément

$coordonnees = $arrayName = array(
	'prenom' => 'François ',
	'nom' => 'Depont',
	'adresse' => '3 rue du Finistère',
	'ville' => 'Marseille' );
foreach ($coordonnees as $cle => $element) //Clés et éléments ne sont pas définis avant le tableaux
{
	echo 'Votre ' . $cle . ' est ' . $element . '<br/>'; 
}
?>
<br/><br/>
<?php

// avec la fonction "Print_R" : Plus complexe, sa spécificité est d'affiché la totalité du tableau et pas seulement les données

$tableau_print_R = array (
 'prenom' => 'Roger ',
	'nom' => 'Sanchez',
);
echo '<pres>'; // Ces trois opérations sont a réalisé à chaque fois
print_r ($tableau_print_R);
echo '</pres>';

?>


<h1>Recherches dans les tableaux</h1>
<?php


// array_key_exists : Fonction pour vérifier qu'une clée éxiste bien dans un tableau
$if_Key_Array_Exists = array (
 'prenom' => 'Gordon ',
	'nom' => 'Brown',
);

if (array_key_exists('nom', $if_Key_Array_Exists))
{
	echo 'La clé "nom" se trouve bien dans le tableau !<br/>'; //condition éffectué seulement si la clé mentionnée commen argument existe bien
} 


//Plus intéréssant : "in_array". Vérification qu'une donnée est bien dans le tableau

$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

if (in_array('Myrtille', $fruits))
{
	echo 'La valeur "Myrtille" est bien dans le tableau';
}
if (in_array('Cerise', $fruits))
{
	echo 'La valeur "Cerise" est bien dans le tableau';
}
//array_search : Affiche l'emplacement de l'élement

$position = array_search('Poire', $fruits);
echo '"Poire" se trouve en position ' . $position . '<br/>'; // Ici affiche : "Poire" se trouve en position 2 (Rappel : un array commence par 0)

?> 