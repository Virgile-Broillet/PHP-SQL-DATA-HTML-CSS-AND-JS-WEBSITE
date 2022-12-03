<?php 
$connexion = getConnexionBD(); // connexion à la BD


//Recuperation des Playlists
	$playlist = getInstances($connexion, "`LISTE_DE_LECTURE`");
	if($playlist == null || count($playlist) == 0)
	{
		$message .= "Aucune Playlist n'a été trouvée dans la base de données !"; 
	}
//Recupération des chansons
	$chanson = getInstances($connexion, "`CHANSON`");
	if($chanson == null || count($chanson) == 0)
	{
		$message .= "Aucune Playlist n'a été trouvée dans la base de données !"; 
	}
	
// FORMULAIRE DE COMPARAISON
	if(isset($_POST['boutonComparer'])) 
	{
		$titreLec1 = $_POST['titreL'];  // nom de la playlist 1
		$titreLec2 = $_POST['titreL2']; // nom de la playlist 2
	}
// FORMULAIRE DE SUPPRESSION

	if(isset($_POST['boutonSupprimer'])) 
	{
		$nomChanson=$_POST['titreChanson'];
		$idV=get_idV_inter($connexion, $nomChanson);
		$idLec =$_COOKIE['idLec'];
		$nom = $_COOKIE['nomPlaylist'];
		if(delete_chanson_from_playlist($connexion, $idV, $idLec)){
			$message .= "La Chanson ".$nomChanson." a bien été supprimé de la playlist ".$nom." !";
		}
	}

// FORMULAIRE D'AJOUT DE MUSIQUE DANS UNE PLAYLIST

if(isset($_POST['boutonAjout'])) 
	{
		$nomChanson=$_POST['titre_ajouter'];
		$idV=get_idV_inter($connexion, $nomChanson);
		$idLec =$_COOKIE['idLec'];
		$nom = $_COOKIE['nomPlaylist'];
		if(add_chanson_to_playlist($connexion, $idV, $idLec)){
			$message .= "La Chanson ".$nomChanson." a bien été ajouté à la playlist ".$nom." !";
		}
	}
?>
