<?php?>

<?php if(isset($message)) { ?>
	<p style="background-color: yellow;"><?= $message ?></p>
<?php } ?>

<style>
h2{
	width:15em;
}
</style>
<center>
	
	<table>
		<tr>
		 <th> iD </th>
		 <th> Titre de la Version </th>
		 <th> nom du Groupe </th>
		 <th> Date </th>
		 <th> numero_piste </th>
		 
		</tr>

		<?php foreach($CHANSONS_interpretees as $song) { ?>
		<tr>
			<td><?= $song['idC'] ?> </td>
			<td><?= $song['titreC'] ?></td>
			<td><?= $song['nomG'] ?> </td>
			<td><?= $song['date_création'] ?> </td>
			<td><?= $song['numero_piste'] ?> </td>
			
		</tr>
		<?php } ?>

	</table>


	<div class="formulaire">
		<h2>Ajout d'une Chanson</h2>
		<form method="post" action="#">
			<label for="nomchanson"></label>
			<div class="gauche"><p type="Nom de la Chanson :"> <input class="bb" type="text" name="nomchanson" id="nomchanson" placeholder="Mega Disco Giga Disto" /></div></p>
			<div class="droite"><p type="Date de Sortie de la Chanson :"> <input class="bb" type="number" name="date" id="date" placeholder="2022" min="1950" max="2022" required/></div></p></br>
			<div class="gauche"><p type="Durée de la Chanson :"> <input class="bb" type="number" name="durée" id="durée" placeholder="244 means 244 seconds, 4m06s" min="1" required /></div></p>
			<div class="droite"><p type="Chemin du fichier de la chanson :"> <input class="bb" type="text" name="chemin" id="chemin" placeholder="E:/.../....mp3 or https://..." required/></div></p></br>

			</br></br></br></br></br></br></br>

			<p type="Nom du Groupe :"> 
				<select name="nomgroupe" id="nomgroupe">
					<?php foreach($groupe as $groupe) { ?>
						<option><?= $groupe['nomG'] ?></option>
					<?php } ?>
				</select>
			</p>

			<div class="gauche">
				<p type="Forme de la Chanson :">
					<select name="forme" id="forme">
						<option>Composition</option>
						<option>Reprise</option>
					</select>
				</p>
			</div>
			
			<div class="droite">
				<p type="Type de la Chanson :">
					<select name="type" id="type">
						<option>Original</option>
						<option>Réduite (Radio)</option>
						<option>Version Live</option>
						<option>Autres</option>
					</select>
				</p>
			</div>

			<div class="gauche">
				<p type="Nom de l'Album :">
					<select name="album" id="album">
						<option>Ne Sait Pas</option>
						<?php foreach($album as $album) { ?>
						<option><?= $album['titreA'] ?></option>
					<?php } ?>
					</select>
				</p>
			</div>

			<div class="droite">
				<p type="Numéro de Piste">
					<input class="bb" type="number" name="numero_piste" id="numero_piste" placeholder="0 If You Don't Know" min="0" max="40" required/>
				</p>
			</div>

			</br></br></br></br></br>
			</br></br></br></br></br></br>
			
			<p type="Genre de la Musique :">
				<select name="genre" id="genre">
					<?php foreach($genre as $genre) { ?>
						<option><?= $genre['nom_genre'] ?></option>
					<?php } ?>
				</select>
			<br/></p>

			</br>

			<div class="button"><input type="submit" name="boutonValider" value="Ajouter"/></div>
		</form>
	</div>
		</br>
		
	<div class="formulaire">
		<h2>Supprimer une Chanson</h2>
		<form method="post" action="#">
			<select name="nomchanson" id="nomchanson">
				<?php foreach($chanson as $song) { ?>
					<option><?= $song['titreC'] ?></option>
				<?php } ?>
			</select>
			<div class="button"><input type="submit" name="boutonSuppr" value="Supprimer"/></div>
		</form>
	</div>
</center>

