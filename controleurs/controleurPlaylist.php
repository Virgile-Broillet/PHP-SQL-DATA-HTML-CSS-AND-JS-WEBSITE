<?php 

	$connexion = getConnexionBD(); // connexion à la BD

	// recuperation des Playlists
	$playlist = getInstances($connexion, "`LISTE_DE_LECTURE`");
	if($playlist == null || count($playlist) == 0)
	{
		$message .= "Aucune Playlist n'a été trouvée dans la base de données !"; 
	}


	if(isset($_POST['boutonSupp'])) 
	{ // formulaire 2 soumis
		$titreLec2 = $_POST['titreL']; //recuperation nom playlist
		$id = get_id_By_NomPlaylist($connexion, $titreLec2);
		delete_ligne($connexion, $id, "`LISTE_DE_LECTURE`", "`idLec`");
		delete_ligne($connexion, $id, "`JOUER`", "`idLec`");
		delete_ligne($connexion, $id, "`INCLURE`", "`idLec`");
		// on supprime la ligne correspondant au nom de la playlist;
		echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=https://bdw.univ-lyon1.fr/p2103804/Nuggets-Musique/index.php?page=playlist#'>";
	}
 
	if(isset($_POST['boutonActualiser']))
	{
		echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=https://bdw.univ-lyon1.fr/p2103804/Nuggets-Musique/index.php?page=playlist#'>";
	}
?>
