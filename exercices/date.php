<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Ma page web</title>
	</head>
	<body>
		<h1>Ma page web</h1>
		<p>Aujourd'hui nous sommes le <?php echo date('d/m/Y
h:i:s'); ?></p>
		<?php
		echo "<br/>Votre navigateur est " . $_SERVER['HTTP_USER_AGENT'] . "<br/><br/><br/>"; //Fonction info sur le visiteur
		echo "J'habite en Chine."; //commentaires
		//commentaires
		echo "J'ai 92 ans!";
		  ?>
	</body>
</html>