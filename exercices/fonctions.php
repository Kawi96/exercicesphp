<?php

//Déclaration
	function somme($n1, $n2)
	{
		$somme = $n1 + $n2;
		return $somme;
	}
	//Utilisation

	$p=somme(1,2); //Pour l'afficher on la met généralement dans une variable !!!
	echo "J'ai " . $p . "€<br/>";
	echo somme(2,3); //On peut aussi l'afficher seule

	function affichage()
	{
		echo "brrrrrrr<br/><br/>";
	}
	affichage();
	affichage();
	affichage();

	function DireBonjour($nom)
	{
		echo "Bonjour " . $nom . ", Tu vas bien?<br/>";
	}
	DireBonjour('Maria');
	DireBonjour('Josette');

	// Calcul de cone (exemple de fonction un peu plus complexe)

	function VolumeCone($rayon, $hauteur)
	{
		$Volume = $rayon * $rayon * 3.14 * $hauteur * 1/3;
		return $Volume; // Très important !!! 
	}

	$Volume = VolumeCone (3, 1);

	echo "Le volume du petit cône est :" . $Volume . " cm3";
?>

