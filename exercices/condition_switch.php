<?php
$note = 5;
switch ($note) //variable de switch

	{
case 0 :
	echo "Tu n'as aucun point : $note/20";
break;

case 5 :
	echo "Tu as le quart des points : $note/20 ";
break;

case 10 :
	echo "Tu as la moitié des points : $note/20";
break;

case 15 :
	echo "Tu as les trois quart des points : $note/20";
break;

case 20 :
	echo "Tu as tous les points : $note/20";
break;
	}
	// Attention : Le switch ne peut tester que les égalités !!!!
?>
