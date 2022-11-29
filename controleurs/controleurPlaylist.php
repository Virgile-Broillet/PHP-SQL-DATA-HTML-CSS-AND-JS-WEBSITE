<?php 

	$connexion = getConnexionBD(); // connexion à la BD

	// recuperation des Playlists
	$playlist = getInstances($connexion, "`LISTE_DE_LECTURE`");
	if($playlist == null || count($playlist) == 0)
	{
		$message .= "Aucune Playlist n'a été trouvée dans la base de données !"; 
	}

	if(isset($_POST['boutonValider']))
	{
		$titreLec = $_POST['nomPlaylist'];
		$temps = $_POST['duréePlaylist'];
		$nomGenre = $_POST['genre1'];

		$durée = $temps*60;
		
		if(empty($_POST['nomPlaylist']))
		{
			$nom1 = nom_aléatoire_GRP($connexion, " ");
			$nom2 = nom_aléatoire_GENRE($connexion, "; ");
			$nom3 = nom_aléatoire_SONG($connexion, " ");
			$titreLec = $nom1." ".$nom2." ".$nom3;
		}

		if(VERIF($titreLec))
		{
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=https://bdw.univ-lyon1.fr/p2103804/serial-critique/index.php?page=gifs'>";
		}else
		{
			$verification=getPlaylistByName($connexion, $titreLec);
		
			if($verification == FALSE || count($verification) == 0) 
			{ // pas de Playlist avec ce nom, insertion
				Get_Under_Gender($connexion, $nomGenre);
				$idLec=get_Last_Id_PLAYLIST($connexion);
				$sqltable=SQL_TO_TAB($connexion, $nomGenre, $durée, 5, $idLec);
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
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=https://bdw.univ-lyon1.fr/p2103804/serial-critique/index.php?page=playlist#'>";
		}
	}
	
	if(isset($_POST['boutonSupp'])) 
	{ // formulaire 2 soumis
		$titreLec2 = $_POST['titreL']; //recuperation nom playlist
		$id = get_id_By_NomPlaylist($connexion, $titreLec2);
		delete_ligne($connexion, $id, "`LISTE_DE_LECTURE`", "`idLec`");
		delete_ligne($connexion, $id, "`JOUER`", "`idLec`");
		delete_ligne($connexion, $id, "`INCLURE`", "`idLec`");
		// on supprime la ligne correspondant au nom de la playlist;
		echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=https://bdw.univ-lyon1.fr/p2103804/serial-critique/index.php?page=playlist#'>";
	}
 
?>
