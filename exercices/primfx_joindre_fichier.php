<html>
	<head>
	</head>
		<title>TUTO fichier</title>
		<meta charset="utf-8">

	<body>
		<?php
			$fichier = fopen('salut.txt', 'r+');

			$ligne = file_get_contents('salut.txt')($fichier);

			echo $ligne;


			fclose($fichier);

		?>

	</body>


</html>