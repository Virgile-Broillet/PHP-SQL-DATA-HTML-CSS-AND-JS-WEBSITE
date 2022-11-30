<style>

h4{width:45em;}

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
	
<!-- DEBUT DE LA TABLE D'AFFICHAGE DES PLAYLISTS-->
	<table>
<?php
	if(isset($_POST['boutonChanson'])) 
	{?>
		</br></br>
		<tr>
			<th> Titre de la Chanson :</th>
			<th> Playcount :</th>
			<th> Skipcount :</th>
			<th> Lastplayed :</th>
			<th> Date :</th>
			<th> Durée :</th>
    	</tr>

		<?php
			$nomPlaylist=$_POST['titreLec'];
			$Tab_titre = get_chansons_playlist($connexion, 'titreC' ,$nomPlaylist);
			$Tab_play = get_chansons_playlist($connexion, 'playcount' ,$nomPlaylist);
			$Tab_skip = get_chansons_playlist($connexion, 'skipcount' ,$nomPlaylist);
			$Tab_last = get_chansons_playlist($connexion, 'lastplayed' ,$nomPlaylist);
			$Tab_date = get_chansons_playlist($connexion, 'dateV' ,$nomPlaylist);
			$Tab_durée = get_chansons_playlist($connexion, 'Durée' ,$nomPlaylist);
			$nb = count($Tab_titre); ?>
			<h4>Information de la Playlist : <?php echo $nomPlaylist; ?></h4>
		
		<tr>
			<?php for($i=0; $i<$nb; $i++){ 
				$nombre = intval($Tab_last[$i]/1000);
				if(empty($Tab_last[$i])||$Tab_last[$i]<1000){$valeur="Jouer Récemment (moins d'une seconde)";}else{$valeur="Jouée il y a environ : ".$nombre." secondes";} ?>
				<td><?= $Tab_titre[$i] ?></td>
				<td><?= $Tab_play[$i] ?></td>
				<td><?= $Tab_skip[$i] ?></td>
				<td><?= $valeur ?></td>
				<td><?= $Tab_date[$i] ?></td>
				<td><?= $Tab_durée[$i] ?> secondes</td>
				</tr>
			<?php } ?>
		
			
			
	<?php }

	if(isset($_POST['boutonComparer'])) 
	{?>
		</br></br>
		<tr>
			<th> Titre de la Playlist :</th>
			<th> Nombres de Musiques :</th>
			<th> Durée de la Playlist :</th>
			<th> Musique la plus Écoutée :</th>
			<th> Musique la plus Sautée :</th>
			<th> Musique la plus récemment Jouée :</th>
    	</tr>

		<?php
			$nomPlaylist1=$_POST['titreL'];
			$Tab_durée = get_chansons_playlist($connexion, 'Durée' ,$nomPlaylist1);
			$Tab_Play=get_chansons_playlist_DESC($connexion, 'playcount' ,$nomPlaylist1);
			$Tab_Play_titre=get_chansons_playlist_DESC_get_titreC($connexion, 'playcount', $nomPlaylist1);
			$Tab_Jump=get_chansons_playlist_DESC($connexion, 'skipcount' ,$nomPlaylist1);
			$Tab_Jump_titre=get_chansons_playlist_DESC_get_titreC($connexion, 'skipcount', $nomPlaylist1);
			$Tab_Jouer=get_chansons_playlist_ASC($connexion, 'lastplayed' ,$nomPlaylist1);
			$nb2=count($Tab_durée);

			$nomPlaylist2=$_POST['titreL2'];
			$Tab_durée2 = get_chansons_playlist($connexion, 'Durée' ,$nomPlaylist2);
			$Tab_Play2=get_chansons_playlist_DESC($connexion, 'playcount' ,$nomPlaylist2);
			$Tab_Play_titre2=get_chansons_playlist_DESC_get_titreC($connexion, 'playcount', $nomPlaylist2);
			$Tab_Jump2=get_chansons_playlist_DESC($connexion, 'skipcount' ,$nomPlaylist2);
			$Tab_Jump_titre2=get_chansons_playlist_DESC_get_titreC($connexion, 'skipcount', $nomPlaylist2);
			$Tab_Jouer2=get_chansons_playlist_ASC($connexion, 'lastplayed' ,$nomPlaylist2);
			$nb3=count($Tab_durée2);

			for($i=0; $i<$nb2; $i++){
				$durée=$durée+$Tab_durée[$i];
			}

			for($j=0; $j<$nb3; $j++){
				$durée2=$durée2+$Tab_durée2[$j];
			}
			?>
			<h4>Comparaison de la Playlist : <?php echo $nomPlaylist1; ?> avec la Playlist : <?php echo $nomPlaylist2; ?> </h4>

			<?php $nombre1 = intval($Tab_Jouer[0]/1000); if($Tab_Jouer[0]>1000){$valeur1 = "Jouée il y a environ ".$nombre1." secondes";}else{$valeur1 = "Jouée très Récemment (moins d'une seconde)";}?>
			<?php $nombre2 = intval($Tab_Jouer2[0]/1000); if($Tab_Jouer2[0]>1000){$valeur2 = "Jouée il y a environ ".$nombre2." secondes";}else{$valeur2 = "Jouée très Récemment (moins d'une seconde)";}?>
		
			<tr>
				<td><?= $nomPlaylist1 ?></td>
				<td><?= $nb2 ?></td>
				<td><?= $durée ?> secondes</td>
				<td><?= $Tab_Play[0] ?> fois, <?= $Tab_Play_titre[0] ?></td>
				<td><?= $Tab_Jump[0] ?> fois, <?= $Tab_Jump_titre[0] ?></td>
				<td><?= $valeur1 ?></td>
			</tr>
			<tr>
				<td><?= $nomPlaylist2 ?></td>
				<td><?= $nb3 ?></td>
				<td><?= $durée2 ?> secondes</td>
				<td><?= $Tab_Play2[0] ?> fois, <?= $Tab_Play_titre2[0] ?></td>
				<td><?= $Tab_Jump2[0] ?> fois, <?= $Tab_Jump_titre2[0] ?></td>
				<td><?= $valeur2 ?></td>
			</tr>

		
			
			
	<?php } ?>

	</table>

	<!-- PREMIER FORMULAIRE POUR VISUALISER UNE PLAYLISTS -->
	
	<div class="formulaire">
		<h2> Voir Les Musiques de la Playlist </h2>
		</br>
		<form method="post" action="#">
			<select name="titreLec" id="titreLec" >
				<?php foreach($playlist as $playliste) {  ?>
					<option><?= $playliste['titreLec'] ?></option>
				<?php } ?>
			</select></br></br>
			<div class="button"><input type="submit" name="boutonChanson" value="Valider"/></div>
		</form>
	</div>
	
	
	<!-- DEUXIEME FORMULAIRE POUR COMPARER DEUX PLAYLISTS -->
	
	<div class="formulaire">
		<h2> Comparaison de Deux Playlists</h2>
		</br>
		<form method="post" action="#">
			<div class="gauche">
				<select name="titreL" id="titreL" >
					<?php foreach($playlist as $playliste) {  ?>
						<option><?= $playliste['titreLec'] ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="droite">
				<select name="titreL2" id="titreL2" >
					<?php foreach($playlist as $playliste2) {  ?>
						<option><?= $playliste2['titreLec'] ?></option>
					<?php } ?>
				</select>
			</div></br></br></br>
			<div class="button"><input type="submit" name="boutonComparer" value="Comparer"/></div>
		</form>
	</div>

</center>
