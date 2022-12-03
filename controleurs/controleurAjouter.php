<?php 

$groupe = getInstances($connexion, "GROUPE");
if($groupe == null || count($groupe) == 0) {
	$message .= "Aucun Groupe n'a été trouvée dans la base de données !";
}

$genre = getInstances($connexion, "GENRE");
if($genre == null || count($genre) == 0) {
	$message .= "Aucun Genre n'a été trouvée dans la base de données !";
}

$chanson = getInstances($connexion, "CHANSON");
if($chanson == null || count($chanson) == 0) {
	$message .= "Aucune Chansons n'a été trouvée dans la base de données !";
}

$album = getInstances($connexion, "ALBUM");
if($album == null || count($album) == 0) {
	$message .= "Aucun ALbum n'a été trouvée dans la base de données !";
}

// pour réaliser un affichage des chansons :
$CHANSONS_interpretees = get_last_songs_by_idC($connexion, 3);

if(isset($_POST['boutonSuppr'])){
	$nomChanson=$_POST['nomchanson'];
	$idc = get_idC_By_titreC($connexion, $nomChanson);

	if(empty($idc)){
		$idc = get_Last_Id_Song($connexion);
		$idc=$idc-1;
	}

	$idV = get_idV_inter($connexion, $nomChanson);

	$del1=delete_ligne($connexion, 'idC', 'POSSÉDER', $idc);
	$del2=delete_ligne($connexion, 'idV', 'INTERPRÉTER', $idV);
	$optionel1=delete_ligne($connexion, 'idV', 'DÉCRIRE', $idV);
	$optionel2=delete_ligne($connexion, 'idV', 'JOUER', $idV);
	$optionel3=delete_ligne($connexion, 'idV', 'PRODUIRE', $idV);
	$optionel4=delete_ligne($connexion, 'idC', 'INVITER', $idc);

	$del3=delete_ligne($connexion, 'idV', 'VERSION', $idV);
	$del4=delete_ligne($connexion, 'idC', 'CHANSON', $idc);


	if($del1&&$del2&&$del3&&$del4 == TRUE){
		$message .= "La chanson ".$nomChanson." a bien été supprimé de la Base de Données !";
	}else{
		$message .= "erreur";
	}
	echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=https://bdw.univ-lyon1.fr/p2103804/Nuggets-Musique/index.php?page=ajouter#'>";
}

if(isset($_POST['boutonValider'])) { // formulaire

	if(empty($_POST['nomchanson']))
	{
		$nomChanson = nom_aléatoire($connexion, 3);
	}
	else 
	{ 
	$nomChanson = $_POST['nomchanson']; }
	$nomGroupe = $_POST['nomgroupe']; // recuperation de la valeur saisie
	$nom_genre = $_POST['genre'];
	$année = $_POST['date'];
	$durée = $_POST['durée'];
	$chemin = $_POST['chemin'];
	$forme = $_POST['forme'];
	$type = $_POST['type'];
	$nomAlbum = $_POST['album'];
	$numero_piste = $_POST['numero_piste'];
	$nV = 1;

	if ($forme == 'Composition')
	{
		$forme2 = 1;
	}else
	{
		$forme2 = 0;
	}

	if(VERIF($nomChanson) or VERIF($chemin))
	{
		echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=https://bdw.univ-lyon1.fr/p2103804/Nuggets-Musique/index.php?page=gifs'>";
	}else {

		$last_id_song=get_Last_Id_Song($connexion);	

		$idA = get_idA_By_nomAlbum($connexion, $nomAlbum);
		$idGE = get_idGE_By_nomGE($connexion, $nom_genre);
		$idG = get_idG_By_nomGroupe($connexion, $nomGroupe);

		$verification = getSongByName($connexion, $nomChanson);

		if($verification == FALSE || count($verification) == 0) { // pas de chanson avec ce nom, insertion

			$insertion_song = insertSong($connexion, $nomChanson, $last_id_song, $année, $forme2, $type, $idA, $numero_piste);
			$insertion_poss = insertPosseder($connexion, $last_id_song, $idGE);
			$insertion_version = insertVersion($connexion, $last_id_song, $nV, $année, $chemin, $durée);
			$insertion_inter = insertInterpreter($connexion, $last_id_song, $idG);

			if($insertion_song && $insertion_poss && $insertion_version && $insertion_inter == TRUE) {
				$message = "La Chanson $nomChanson a bien été ajoutée !";
			}
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=https://bdw.univ-lyon1.fr/p2103804/Nuggets-Musique/index.php?page=ajouter#'>";
		}
		else {

			$idV = get_Last_Id_Version($connexion, $nomChanson);
			$nV = get_last_nV_By_titreC($connexion, $nomChanson);
			$idC = get_idC_By_titreC($connexion, $nomChanson);
			$nV = $nV+1;

			$insertion_version2 = insertVersion($connexion, $idV, $nV, $année, $chemin, $durée);
			$insertion_inter2 = insertInterpreter2($connexion, $idV, $idC, $idG);
			$message = "Une Chanson existe déjà avec ce nom ($nomChanson), une nouvelle version à été insérée.";

			if($insertion_version2 && $insertion_inter2 == TRUE){
				$message = "Une Chanson existe déjà avec ce nom ($nomChanson), une nouvelle version à été insérée.";
			}

			echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=https://bdw.univ-lyon1.fr/p2103804/Nuggets-Musique/index.php?page=ajouter#'>";
		}
	}
}

?>
