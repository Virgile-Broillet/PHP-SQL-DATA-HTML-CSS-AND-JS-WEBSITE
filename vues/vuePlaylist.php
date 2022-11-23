

<?php if(isset($message)) { ?>
	<p style="background-color: yellow;"><?= $message ?></p>
<?php } ?>

<style>
h2{
	width:20em;
}
</style>

<center>
	
	<table>
	<tr>
	 <th> identifiant </th>
     <th> titre de la Playlist </th>
     <th> Date de création </th>
    </tr>

<?php foreach($playlist as $playliste) { ?>
   <tr>
	<td><?= $playliste['idLec'] ?></td>
	<td><?= $playliste['titreLec'] ?> </td>
	<td><?= $playliste['dateLec'] ?> </td>
   </tr>
<?php } ?>
</table>


	<div class="formulaire">
		<h2> Création d'Une Playlist Aléatoire</h2>
		<form method="post" action="#">
			<label for="nomchanson"></label>
			
			<div class="gauche"><p type="Durée de la Playlist en minutes :"> <input class="bb" type="number" name="duréePlaylist" id="durée en minutes" placeholder="20" min="4" required /></div></p>
			<div class="droite"><p type="Nom de votre Playlist :"> <input class="bb" type="text" name="nomPlaylist" id="nomPlaylist" placeholder="Les musiques de Tchoupi" ></div></p></br>
			
			</br></br></br></br></br>

			<p type="Genre privilégié :">
				<select name="genre1" id="genre1">
						<option>Tous les genres ( au hasard )</option>
						<option>Metal</option>
						<option>Rock</option>
						<option>Pop</option>
						<option>Funk</option>
						<option>Punk</option>
						<option>Indie</option>
						<option>Electro</option>
						<option>Classical</option>
						<option>Reggae</option>
				</select>
			<br/></p>
			
			</br>

			<div class="button"><input type="submit" name="boutonValider" value="Ajouter"/></div>
		</form>
	</div>
	
	<div class="formulaire">
		<h2> Supression d'Une Playlist</h2>
		</br>
		<form method="post" action="#">
			<select name="titreL" id="titreL" >
				<?php foreach($playlist as $playliste) {  ?>
					<option><?= $playliste['titreLec'] ?></option>
				<?php } ?>
			</select></br></br>
			<div class="button"><input type="submit" name="boutonSupp" value="Supprimer"/></div>
		</form>
	</div>
	 
</center>
