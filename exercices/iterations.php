<?php 
$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 10) {
	echo "Je ne dois pas regarder les mouches voler quand j'apprends le PHP <br/>";
	$nombre_de_lignes++; //$nombre_de_ligne = $nombre_de_lignes + 1
}

while ($nombre_de_lignes <= 15) {
	echo "Ceci est la lignen°" . $nombre_de_lignes . "<br/>"; //affiche le num de la viariable
	$nombre_de_lignes++; //Le résultats est celui supérieur à la première boucle
	?><p>bbbbbbbbbbbbbbb</p> <?php //Rappel : HTML possible dans la boucle...
}

for ($nombre_de_lignes =15; $nombre_de_lignes <= 20 ; $nombre_de_lignes++) { // comme pour les formules SI : condition 1(départ) ; condition 2(arrivée) ; instruction)
	?> <p>Résultat de la boucle for</p> <?php
}

//RAPPEL GENERAL : Utiliser "for" quand on sait combien de fois on veut répéter et "While" quand on ne sait pas combien
?>