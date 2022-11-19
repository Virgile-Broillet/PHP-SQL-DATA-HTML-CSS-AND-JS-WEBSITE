<?php 

$rand = rand(100, 100001);

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

if(isset($_POST['boutonValider'])) { // formulaire soumis

	$nomGroupe = $_POST['nomgroupe']; // recuperation de la valeur saisie
	$nomChanson = $_POST['nomchanson'];
	$nom_genre = $_POST['genre'];
	$année = $_POST['date'];
	$durée = $_POST['durée'];
	$chemin = $_POST['chemin'];
	$forme = $_POST['forme'];
	$type = $_POST['type'];
	$nV = 1;

	if ($forme == 'Composition')
	{
		$forme2 = 1;
	}else
	{
		$forme2 = 0;
	}

	$last_id_song=get_Last_Id_Song($connexion);	

	echo $last_id_song;

	$idGE = get_idGE_By_nomGE($connexion, $nom_genre);
	$idG = get_idG_By_nomGroupe($connexion, $nomGroupe);

	echo $idGE." coucou2   ";
	echo $idG." coucou   ";
	echo $nomGroupe.$nomChanson.$nom_genre.$durée.$année.$chemin.$forme.$type.$nV;

	$verification = getSongByName($connexion, $nomChanson);
	$insertion_song = insertSong($connexion, $nomChanson, $last_id_song, $année, $forme2, $type);
	$insertion_poss = insertPosseder($connexion, $last_id_song, $idGE);
	$insertion_version = insertVersion($connexion, $last_id_song, $nV, $année, $chemin, $durée);
	$insertion_inter = insertInterpreter($connexion, $last_id_song, $idG);

	if($verification == FALSE || count($verification) == 0) { // pas de chanson avec ce nom, insertion

		if($insertion_song && $insertion_poss && $insertion_version && $insertion_inter == TRUE) {
			$message = "La Chanson $nomChanson a bien été ajoutée !";
		}
		else {
			$message = "Erreur lors de l'insertion de la Chanson $nomChanson.";
		}
	}
	else {
		$message = "Une Chanson existe déjà avec ce nom ($nomChanson).";
	}
}

?>
