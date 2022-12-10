

<?php if(isset($message)) { ?>
	<p style="background-color: yellow;"><?= $message ?></p>
<?php } ?>

<style>
h2{
	width:20em;
}
h5{
	width:25em;
}

.centrer{
	width:25em;
}
</style>

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

   <!-- FORMULAIRE DE CREATION DE PLAYLISTS-->
	<div class="formulaire">
		<h2> Création d'Une Playlist Aléatoire</h2>
		<form method="post" action="#">
			<label for="nomchanson"></label>
			
			<div class="gauche"><p type="Durée de la Playlist en minutes :"> <input class="bb" type="number" name="duréePlaylist" id="durée en minutes" placeholder="20" min="4" max="480" required /></div></p>
			<div class="droite"><p type="Nom de votre Playlist :"> <input class="bb" type="text" name="nomPlaylist" id="nomPlaylist" placeholder="Les musiques de Tchoupi" ></div></p></br>
			
			</br></br></br></br></br>
	<div class="gauche">
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
	</div>
	</br> </br>
	<div class="droite">
<fieldset>
    <legend>Types de Chansons  :</legend>
	<div class="droite">
      <input type="radio" id="Toutes" name="BOUTTON-RADIO" value="Toutes" checked>
      <label for="Chanson_1">Toutes</label>
    </div>

  <div class="gauche">
      <input type="radio" id="Les plus jouées" name="BOUTTON-RADIO" value="Les plus jouées">
      <label for="Chanson_2">Les plus jouées</label>
  </div>

   <div class="droite">
      <input type="radio" id="Les moins sautées" name="BOUTTON-RADIO" value="Les moins sautées">
      <label for="Chanson_3">Les moins sautées</label>	
	</div>
	
	<div class="gauche">
      <input type="radio" id="Jouées récemment" name="BOUTTON-RADIO" value="Jouées récemment">
      <label for="Chanson_4">Jouées récemment</label>	
	</div>
</fieldset>
	</div>
		<form method="post" action="#">
			<h5>
				<div class="gauche">
			<div class="button">
				<input type="submit" name="boutonInformations" value="Informations"/>
			</div>
				</div>
			</form>
	</br></br></br></br></br></br></br></br>
			<div class="button"><input type="submit" name="boutonValider" value="Ajouter"/></div>
		</form>
	</div>
	
	<!-- Affichage pour connaître l'étât de l'ajout -->
	<?php if((isset($_POST['boutonValider']))||(isset($_POST['boutonInformations'])) ) { 
		
		
		
		$titreLec = $_POST['nomPlaylist'];
		$temps = $_POST['duréePlaylist'];
		$nomGenre = $_POST['genre1'];

		$durée = $temps*60;
		
		if(empty($_POST['nomPlaylist']))
		{
			$nom1 = nom_aléatoire_GRP($connexion, " ");
			$nom2 = nom_aléatoire_GENRE($connexion, "; ");
			$nom3 = nom_aléatoire_SONG($connexion, " ");
			$nbr = rand(0,5); // on va mélanger les 3 résultats au hasard
			switch ($nbr) // 3 éléments donc 3 factoriel permutations possibles = 6 choix au total
			 {
			case 0:
			$titreLec = $nom1." ".$nom2." ".$nom3;
			break;
			case 1:
			$titreLec = $nom2." ".$nom1." ".$nom3;
			break;
			case 2:
			$titreLec = $nom1." ".$nom3." ".$nom2;
			break;
			case 3:
			$titreLec = $nom2." ".$nom3." ".$nom1;
			break;
			case 4:
			$titreLec = $nom3." ".$nom2." ".$nom1;
			break;
			case 5:
			$titreLec = $nom3." ".$nom1." ".$nom2;
			break;
			}
			// pour Un nom de playlist de longueur plus que 3 mots, on aurait pu utiliser une boucle pour allant jusqu'à 
			// un nombre tiré aléatoirement qui appelle au hasard les fonctions nom_améatoire ( soit GRP, soir GENRE, soit CHANSON )
			// puis on les insère ce mot en queue d'une chaîne de carractère retournée en fin de programme.
			// avantage : MOins fastidieux à coder que le SWITCH ci-dessus.
			
			// Allez-voir includes.php pour une surprise !
		}
		

		if(VERIF($titreLec))
		{
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=https://bdw.univ-lyon1.fr/p2103804/Nuggets-Musique/index.php?page=gifs'>";
		}else
		{
			$verification=getPlaylistByName($connexion, $titreLec);
			
			
			if(isset($_POST['BOUTTON-RADIO']))
			{
				$radio_test = $_POST['BOUTTON-RADIO'];
				$afficher1 = "NON";
				$afficher2 = "NON";
				$afficher3 = "NON";
				$afficher4 = "NON";
					 if ($radio_test == 'Les plus jouées'){$radio=2; $afficher2 = "OUI";
				}elseif($radio_test == 'Les moins sautées'){$radio=3; $afficher3 = "OUI";
				}elseif($radio_test == 'Jouées récemment'){$radio=4; $afficher4 = "OUI";
				}elseif($radio_test == 'Toutes'){$radio=1; $afficher1 = "OUI";} // par défaut 
				}
			//else{$radio = " VERSION ";}// par défaut (pour être sûr )
			
			if($verification == FALSE || count($verification) == 0) 
			{ // pas de Playlist avec ce nom, insertion
				Get_Under_Gender($connexion, $nomGenre);
				$idLec=get_Last_Id_PLAYLIST($connexion);
				$sqltable=SQL_TO_TAB_PLAYLIST($connexion, $nomGenre, $durée, 5, $idLec ,$radio );
				$insertP=insertPlaylist($connexion, $idLec, $titreLec);

				if($insertP == TRUE) {
					$message = "La Playlist $titreLec a bien été ajoutée !";
				}
				else {
					$message = "Erreur lors de l'insertion de la Playlist $titreLec.";
				}
			}
			else {
				$message = "Une Playlist existe déjà avec ce nom ($titreLec).";
			}
		} ?>
	
				<!-- AFFICHAGE DE LA PLAYLIST AJOUTEE -->
	
			<?php
		
				$nomPlaylist=$titreLec;
				$idLec = get_chansons_playlist($connexion, 'idLec' ,$nomPlaylist);
				setcookie('idLec', $idLec[0]);
				//$Tab_genre = get_genres_playlist($connexion ,$nomPlaylist);
				$Tab_titre = get_chansons_playlist($connexion, 'titreC' ,$nomPlaylist);
				$Tab_play = get_chansons_playlist($connexion, 'playcount' ,$nomPlaylist);
				$Tab_skip = get_chansons_playlist($connexion, 'skipcount' ,$nomPlaylist);
				$Tab_last = get_chansons_playlist($connexion, 'lastplayed' ,$nomPlaylist);
				$Tab_date = get_chansons_playlist($connexion, 'dateV' ,$nomPlaylist);
				$Tab_durée = get_chansons_playlist($connexion, 'Durée' ,$nomPlaylist);
				$nb = count($Tab_titre); ?>
				</br></br>
				<h4>Information de la Playlist : <?php echo $nomPlaylist; ?></h4>
			
		<?php /* if(isset($_POST['boutonInformations'])){ */ ?>
			
		<table>
			</br></br>
			<?php if(isset($_POST['boutonInformations'])){ ?>
			<tr>
				<th> Titre de la Chanson :</th>
				<th> genre :</th>
				<th> Playcount :</th>
				<th> Skipcount :</th>
				<th> Lastplayed :</th>
				<th> Date :</th>
				<th> Durée :</th>
			</tr>

			<tr>
				<?php for($i=0; $i<$nb; $i++){ 
					$nombre = intval($Tab_last[$i]/1000);
					if(empty($Tab_last[$i])||$Tab_last[$i]<1000){$valeur="Jouée Récemment ";}
						else{$valeur="Jouée il y a environ : ".$nombre." secondes";} 
						$genre_affiche="| ";
					foreach(search_nom_genre($connexion, $Tab_titre[$i]) as $tab)
					{
						$genre_affiche = $genre_affiche.$tab." | ";
					}
						?>	
						
					<td><?= $Tab_titre[$i] ?></td>
					<td><?=$genre_affiche ?></td>
					<td><?= $Tab_play[$i] ?></td>
					<td><?= $Tab_skip[$i] ?></td>
					<td><?= $valeur ?></td>
					<td><?= $Tab_date[$i] ?></td>
					<td><?= $Tab_durée[$i] ?> secondes</td>
			</tr> 	
				<!--</table>-->
			<?php }	?>
		<?php } ?> 
				<!--<table>-->
			           <!-- FIN DE L'AFFICHAGE APRES AJOUT -->
				<th> Genre saisi :</th>
				<th> genres respectés :</th>
				<th> Plus jouées :</th>
				<th> Skipcount :</th>
				<th> Les plus récentes :</th>
				<th> Tout :</th>
				<th> Durée totale :</th>
			<tr>
			<?php 
				$info=" ";
				$compt=0;
				if($_POST['genre1']=="Tous les genres ( au hasard )")
				{
					$genres_res=100;
				}else{
					$genres_respectes = 0;
					foreach($Tab_titre as $titres)
					{
						//$compt=$compt+1;
						if(isset($_POST['boutonInformations'])){}
						if(in_array($_POST['genre1'], search_nom_genre($connexion, $titres), false))
						{
							if(isset($_POST['boutonInformations'])){}
							if(isset($_POST['boutonInformations'])){}
							$genres_respectes=$genres_respectes+1;
						 }
					}
						$genres_res = ($genres_respectes/count($Tab_titre))*100;
					}
				
			?>
					<td><?=$_POST['genre1'] ?></td>
					<td><?= round($genres_res, 2) ?>% </td>
					<td><?= $afficher2 ?></td>
					<td><?= $afficher3 ?></td>
					<td><?= $afficher4 ?></td>
					<td><?= $afficher1 ?></td>
					<td><?=array_sum($Tab_durée) ?> secondes</td>
			</tr>
		</table>
		
		<?php if($_POST['genre1'] !="Tous les genres ( au hasard )")
				{?>
		<h5>
			Il Y A <?=$genres_respectes ?> Genres respectés parmi <?=count($Tab_titre)?> Chansons ajoutées. 
		</h5>
		
		<?php } ?> <!-- FIN DU BOUTON AJOUT-->
	
		<form method="post" action="#">
			<div class="button centrer" >
				<input type="submit" name="boutonActualiser" value="Actualiser"/>
			</div>
		</form>
		</br></br></br></br>
			
		
	<?php }		// fin du formulaire d'ajout bouton Valider?>
	
	 
	<!-- FORMULAIRE DE SUPPRESSION DE PLAYLISTS -->
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
