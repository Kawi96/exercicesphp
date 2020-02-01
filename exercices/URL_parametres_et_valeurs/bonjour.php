<?php 

if (isset($_GET ['prenom']) AND isset($_GET['nom'])) //Isset : Si le parrametre est rempli !!!
{
 	echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
}
else 
{
	echo "Il faut renseigner un nom et un prenom !";
}

//On ajoute une boucle pour répéter un nombre de fois spécifique

$_GET['repeter'] = (int) $_GET['repeter']; // Important : Affectation d'un INT seulement
if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter']))
{
	for ($i = 0 ; $i < $_GET['repeter'] ; $i++)
	{
		echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br />';
	}
}
// Remarque : si $_GET['repeter'] n'est pas un int : La seconde partie du code de s'affiche pas !!!
// Une valeut autre que int = 0 ici !!!

else
{
	echo "Veuillez remplir tous les champs !";
}

//On ajoute une condition : $_GET['repeter'] ne peut être supérieur à 100

$_GET['repeter'] = (int) $_GET['repeter'];
if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter']))
{
	if ($_GET['repeter'] < 100)
		 for ($i = 0 ; $i < $_GET['repeter'] ; $i++)
		{
		echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br />';
		}
	else 
		{
		echo "Entrez une repétition inférieure à 100 !";
		} 

}
	


else
{
	echo "Veuillez remplir tous les champs !";
}

?>

