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
		//do{
	$nom1 = nom_aléatoire_dans_une_table($connexion, "GROUPE", " ");
	$nom2 = nom_aléatoire_dans_une_table($connexion, "GENRE", "; ");
	$nom3 = nom_aléatoire_dans_une_table($connexion, "CHANSON", " ");
	$titreLec = $nom1." ".$nom2." ".$nom3;
	$verification=getPlaylistByName($connexion, $titreLec);
	   //}while($verification == TRUE);
	}
		
	$verification=getPlaylistByName($connexion, $titreLec);
	
	
	if($verification == FALSE || count($verification) == 0) { // pas de Playlist avec ce nom, insertion

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
 
 if(isset($_POST['boutonValider2'])) 
	{ // formulaire 2 soumis
	$identifiant = $_POST['champRech2']; //recuperation id
	$rep2 =  delete_ligne($connexion, $identifiant, "`LISTE_DE_LECTURE`", "titreLec") ;
	// on supprime la ligne correspondant au nom idLEC;
	echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=https://bdw.univ-lyon1.fr/p2103804/serial-critique/index.php?page=playlist#'>";
	}
 
?>
