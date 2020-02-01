<?php

/*Bases des structures conditionnelles */
$age = 11;

if ($age <= 12) // Donc syntaxe : if () puis résultat {}     Aussi : pas de ; après les parrenthèses mais il y en a dans les accolades !!!

{ //Ne pas oublier les accolades!!!!!!!!!!!!!!!!!!!!!!!!!!
	echo "Salut gamin ! Bienvenue sur mon site ! <br />";
	$autorisation_enter = "Oui";
}

else
{
	echo "Ceci est un site pour enfants, vous êtes trop vieux pour pouvoir entrer. Au revoir! <br />";
	$autorisation_enter = "Non";
}

echo "Avez_vous l'autorisation d'entrer? La réponse est : $autorisation_enter";


/*Structure : if elseif else */

if ($autorisation_enter == "Oui")
{
	//Instruction à éxécuter quand on a l'autorisation d'entrer
}

elseif ($autorisation_enter == "Non")
{
	//Instruction à éxécuter quand on n'a pas l'autorisation d'entrer
}

else
{
	echo "Autorisation d'entrer : non renseignée !";
}

/*Condition multiple : AND (peut aussi s'écire && ) , OR (peut aussi s'écrire || )*/
if ($age < 5 OR $age > 10 )
	{?>
		<p>Bon age</p>
	<?php
	}
else
	{
		echo "mauvais age";
	}


?>


