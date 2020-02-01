<p>Cette page ne contient que du HTML.<br/>
		
</p>
<form method="post" action="cible.php">
	<p>
		<br/>
		<input type="text" name="pseudo" />Veuillez taper votre pseudo :<br/>
		<textarea name="message" rows="8" cols="45"> Tappez votre message ici</textarea><br/>
		<input type="submit" value="Valider" />

		<br/><br/>De quelles villes venez vous?<br/>

	<select name="liste_deroulante">
		<option value="rennes">Rennes</option>
		<option value="nantes">Nantes</option>
		<option value="autre">Autre</option>
	</select>

	<input type="checkbox" name="case" id="case" /> <!-- PB : A revoir plus tard si besoin -->
	<label for="case">Ma case à cocher 1</label>
	<label for="case">Ma case à cocher 2</label>

	<br/><br/>Aimez-vous les frites ?<br/> <!-- Bouton radio : ici juste rappel du HTML non lié à la cyble -->
<input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
<input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>
	</p>


</form>