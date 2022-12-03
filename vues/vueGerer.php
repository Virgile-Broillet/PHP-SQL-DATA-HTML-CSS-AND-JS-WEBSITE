
<style>

	h4{width:45em;}

</style>

<?php if(isset($message)) { ?>
	<p style="background-color: yellow;"><?= $message ?></p>
<?php } ?>

<center>
	<!-- AFFICHAGE DES PLAYLISTS -->

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
	
<!-- DEBUT DE LA TABLE D'AFFICHAGE DES CONTENUS DE PLAYLISTS-->

<?php
	if(isset($_POST['boutonChanson'])) 
	{?>
		<table>
			</br></br>
			<tr>
				<th> Titre de la Chanson :</th>
				<th> genre :</th>
				<th> Playcount :</th>
				<th> Skipcount :</th>
				<th> Lastplayed :</th>
				<th> Date :</th>
				<th> Durée :</th>
			</tr>

			<?php
				$nomPlaylist=$_POST['titreLec'];
				$idLec = get_chansons_playlist($connexion, 'idLec' ,$nomPlaylist);
				setcookie('idLec', $idLec[0]);
				setcookie('nomPlaylist', $nomPlaylist);
				$nomgenre = $_COOKIE['genre1'];
				print($nomgenre);
				//$Tab_genre = get_genres_playlist($connexion ,$nomPlaylist);
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
					if(empty($Tab_last[$i])||$Tab_last[$i]<1000){$valeur="Jouée Récemment ";}
						else{$valeur="Jouée il y a environ : ".$nombre." secondes";} 

					$genre_chanson = search_nom_genre($connexion, $Tab_titre[$i]);
						?>
						
					<td><?= $Tab_titre[$i] ?></td>
					<td><?= $genre_chanson[0] ?></td>
					<td><?= $Tab_play[$i] ?></td>
					<td><?= $Tab_skip[$i] ?></td>
					<td><?= $valeur ?></td>
					<td><?= $Tab_date[$i] ?></td>
					<td><?= $Tab_durée[$i] ?> secondes</td>
			</tr> <?php } ?>
		</table>
		<!-- SUPPRESSION DE MUSIQUES -->
		<div class="formulaire"> 
		<form  method="post">
			<h2> Supprimer une chanson de la Playlist </h2>
			<select name="titreChanson" id="titreChanson">
				<?php 
				// $Tab_titre est le nom des chansons de la playlist
				foreach($Tab_titre as $Tab) {  ?>
					<option><?= $Tab ?></option> <!-- Chansons de la Playlist -->
				<?php } ?>
			</select>
			</br></br>
			<div class="button"><input type="submit" name="boutonSupprimer" value="Supprimer"/></div>
		</form>	
		</div>
		</br></br>
				<!-- Ajout DE MUSIQUES -->
		<div class="formulaire" > 
		<form  method="post" action="#">
			<h2> ajouter une chanson à la Playlist </h2>
			<select name="titre_ajouter" id="titre_ajouter" >
				<?php 
				// $Tab_songs est la table des chansons-versions
				foreach($chanson as $song) {  ?>
					<option><?= $song['titreC'] ?></option> <!-- Chansons de la BD -->
				<?php } ?>
			</select>
			</br></br>
			<div class="button"><input type="submit" name="boutonAjout" value="ajouter"/></div>
		</form>	
		</div>

		</br></br>
	<?php } ?>

	<?php
		if(isset($_POST['boutonSupprimer'])) 
		{
			$nomChanson=$_POST['titreChanson'];
			$idV=get_idV_inter($connexion, $nomChanson)[0];
			$idLec =$_COOKIE['idLec'];
		}
	?>	
	
	<!-- COMPARAISON DES PLAYLISTS -->
	<?php
	if(isset($_POST['boutonComparer'])) 
	{?>
		<table>
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
			$Tab_titre1 = get_chansons_playlist($connexion, 'titreC' ,$nomPlaylist1);
			$Tab_durée = get_chansons_playlist($connexion, 'Durée' ,$nomPlaylist1);
			$Tab_Play=get_chansons_playlist_DESC($connexion, 'playcount' ,$nomPlaylist1);
			$Tab_Play_titre=get_chansons_playlist_DESC_get_titreC($connexion, 'playcount', $nomPlaylist1);
			$Tab_Jump=get_chansons_playlist_DESC($connexion, 'skipcount' ,$nomPlaylist1);
			$Tab_Jump_titre=get_chansons_playlist_DESC_get_titreC($connexion, 'skipcount', $nomPlaylist1);
			$Tab_Jouer=get_chansons_playlist_ASC($connexion, 'lastplayed' ,$nomPlaylist1);
			$nb2=count($Tab_durée);

			$nomPlaylist2=$_POST['titreL2'];
			$Tab_titre2 = get_chansons_playlist($connexion, 'titreC' ,$nomPlaylist2);
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
			
			<h4>
				Comparaison de la Playlist : 
				<?php echo $nomPlaylist1; ?>
			    avec la Playlist : 
				<?php echo $nomPlaylist2; ?> 
			</h4>

			<?php $nombre1 = intval($Tab_Jouer[0]/1000); 
				if($Tab_Jouer[0]>1000){$valeur1 = "Jouée il y a environ ".$nombre1." secondes";}
				else{$valeur1 = "Jouée très Récemment ( 0s )";}?>
			<?php $nombre2 = intval($Tab_Jouer2[0]/1000); 
				if($Tab_Jouer2[0]>1000){$valeur2 = "Jouée il y a environ ".$nombre2." secondes";}
				else{$valeur2 = "Jouée très Récemment ( 0s )";}?>
		
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
			<tr>
				<th> Score de Ressemblance : </th>
				<th> Similitude des titres : </th>
				<th> Similitude des durées : </th>
				<th> Musiques en commun  : </th>
				<th> Musiques distinctes : </th>
				<th> Musiques  récentes  : </th>
			</tr>

			<?php $commun = get_musique_commun($connexion, $Tab_titre1, $nb2, $Tab_titre2, $nb3);
			$titre_pourcen = get_similitude_titres($connexion, $Tab_titre1, $nb2 ,$Tab_titre2, $nb3);
			$durée_pourcen = get_similitude_durees($durée, $durée2);
			$récent = get_musique_récente($connexion, $Tab_Jouer, $nb2 ,$Tab_Jouer2, $nb3);
			$distinct = ($nb2+$nb3)-($commun*2);
			?>

			<tr>
				<td> <?= get_score_final($titre_pourcen, $durée_pourcen, $commun, $distinct, $récent, $nb2, $nb3) ?> % </td>
				<td> <?= $titre_pourcen; ?> % </td>
				<td> <?= $durée_pourcen ?> % </td>
				<td> <?= $commun ?> </td>
				<td> <?= $distinct ?> </td>
				<td> <?= $récent ?> </td>
			</tr>
	<?php } ?>
</table>

	<!-- PREMIER FORMULAIRE POUR VISUALISER UNE PLAYLISTS || EVENTUELLEMENT SUPPRIMER UNE CHANSON-->
	
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
