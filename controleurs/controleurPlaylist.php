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
		
		setcookie('titreLec', $titreLec);
		setcookie('nom_genre', $nomGenre);
		
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
			
			// Allez-voir Controleur-Ajouter pour une surprise !
		}
		
		
		

		if(VERIF($titreLec))
		{
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=https://bdw.univ-lyon1.fr/p2103804/Playlist-Watcher/index.php?page=gifs'>";
		}else
		{
			$verification=getPlaylistByName($connexion, $titreLec);
			
			
			
			if(isset($_POST['BOUTTON-RADIO']))
			{
				$radio_test = $_POST['BOUTTON-RADIO'];
					 if ($radio_test == "Les plus jouées"){$radio = "jouees";}
				else if($radio_test == "Les plus sautées"){$radio = "sautees";}
				else if($radio_test == "Les plus sautées"){$radio = "recemment";}
				else{$radio = "VERSION";} // par défaut 
				}
			else{$radio = "VERSION";}// par défaut (pour être sûr )
			
			
			if($verification == FALSE || count($verification) == 0) 
			{ // pas de Playlist avec ce nom, insertion
				Get_Under_Gender($connexion, $nomGenre);
				$idLec=get_Last_Id_PLAYLIST($connexion);
				$sqltable=SQL_TO_TAB($connexion, $nomGenre, $durée, 5, $idLec    );
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
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=https://bdw.univ-lyon1.fr/p2103804/Playlist-Watcher/index.php?page=playlist#'>";
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
		echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=https://bdw.univ-lyon1.fr/p2103804/Playlist-Watcher/index.php?page=playlist#'>";
	}
 
?>
