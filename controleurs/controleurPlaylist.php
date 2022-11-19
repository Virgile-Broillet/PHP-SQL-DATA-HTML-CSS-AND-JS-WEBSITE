<?php 
$connexion = getConnexionBD(); // connexion à la BD


if(isset($_POST['boutonValider'])) {

	$titreLec = $_POST['nomPlaylist'];
	$temps = $_POST['duréePlaylist'];
	$nomGenre = $_POST['genre1'];

	$durée = $temps*60;

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
}
?>
