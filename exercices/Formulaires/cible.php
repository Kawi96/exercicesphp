<p>Bonjour !</p>

<?php 

if (isset($_POST['pseudo']) AND isset($_POST['message']))
{
	echo "Ton pseude est : " . htmlspecialchars($_POST['pseudo']) . "<br/>";
	echo "Voici le contenu de ton message : ".  htmlspecialchars($_POST['message']) . "<br/><br/>";
}

else 
{
  echo "Vous n'avez pas renseigné de pseudo ou de message";
}

echo "Vous habitez dans la ville de :" . $_POST['liste_deroulante'];

echo "Vous avez sélectionné la case :" . $_POST['case'];
?>
<p> Pour retourner à la page précédente : <a href="formulaire.php">Cliquez ici !</a>

<p></p>