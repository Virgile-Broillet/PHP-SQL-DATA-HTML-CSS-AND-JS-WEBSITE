<?php 

error_reporting(0);

function VERIF($nom) {
	$mot_vilain = array("DROP", "drop", "Drop", "dRop", "drOp", "droP", "DRop", "DrOp", "DroP", "dROp", "dRoP", "drOp", "drOP", "dROP", "DrOP", "DRoP", "DROp");
	$tableau = explode(' ', $nom);
	foreach($tableau as $mot)
	{
		if (in_array($mot, $mot_vilain))
		{
			return true;
		}else{return false;}
	}
}

function ADD_FLYING_NUGGETS($connexion) //insertion de mon Groupe (Flying Nuggets)
{
	insertAlbum($connexion, 1, 'First Fly', 2022, 'Romain Gayral');
	insertGroup($connexion, 'Flying Nuggets', 1, 2022);
	insertSong($connexion, 'Halloween Secret Party', 1, 2022, 0, 'Original', 1, 1);
	insertSong($connexion, 'Flying Nuggets', 2, 2022, 0, 'Original', 1, 2);
	insertSong($connexion, 'Lost in Two Worlds', 3, 2022, 0, 'Original', 1, 3);
	insertSong($connexion, 'The Interstellar Funky Pirates Of The Sea II', 4, 2022, 0, 'Original', 1, 4);
	insertSong($connexion, 'Mega Disco Giga Disto', 5, 2022, 0, 'Original', 1, 5);
	insertSong($connexion, 'Yoan The Savior Shark', 6, 2022, 0, 'Original', 1, 6);
	insertVersion($connexion, 1, 1, 2022, 'https://youtu.be/pxlSSLFZeeo', 177);
	insertVersion($connexion, 2, 1, 2022, 'https://youtu.be/2y2HGgKYEkQ', 246);
	insertVersion($connexion, 3, 1, 2022, 'https://youtu.be/GSwEqwpChys', 261);
	insertVersion($connexion, 4, 1, 2022, 'https://youtu.be/TBB5vEeEdKs', 256);
	insertVersion($connexion, 5, 1, 2022, 'https://youtu.be/_N2XLteXBoY', 244);
	insertVersion($connexion, 6, 1, 2022, 'https://youtu.be/FzwnqBg6Ut4', 159);
	insertGenre($connexion, 1, 'Metal');
	insertMusicien($connexion, 1, 'Broillet', 'Virgile', 'Virgile');
	insertMusicien($connexion, 2, 'Brulé', 'Gabriel', 'Gabriel');
	insertMusicien($connexion, 3, 'Jobinot', 'Mathilde', 'Mathilde');
	insertMusicien($connexion, 4, 'NULL', 'Kassime', 'Kassime');
	insertPropriete($connexion, 1, 4249600, 488, 350, 0);
	insertPropriete($connexion, 2, 5899264, 463, 200, 0);
	insertPropriete($connexion, 3, 6278144, 347, 100, 0);
	insertPropriete($connexion, 4, 6170624, 394, 205, 0);
	insertPropriete($connexion, 5, 5874688, 523, 500, 0);
	insertPropriete($connexion, 6, 2547712, 268, 150, 3);
	insertPERIODE($connexion, '2018-09-01', '2022-07-13');

	//jointure

	insertDécrire($connexion, 1, 1);
	insertDécrire($connexion, 2, 2);
	insertDécrire($connexion, 3, 3);
	insertDécrire($connexion, 4, 4);
	insertDécrire($connexion, 5, 5);
	insertDécrire($connexion, 6, 6);

	insertENREGISTRER($connexion, 1, 1);
	insertENREGISTRER($connexion, 1, 2);
	insertENREGISTRER($connexion, 1, 3);
	insertENREGISTRER($connexion, 1, 4);
	insertENREGISTRER($connexion, 1, 5);
	insertENREGISTRER($connexion, 1, 6);

	insertInterpreter($connexion, 1, 1);
	insertInterpreter($connexion, 2, 1);
	insertInterpreter($connexion, 3, 1);
	insertInterpreter($connexion, 4, 1);
	insertInterpreter($connexion, 5, 1);
	insertInterpreter($connexion, 6, 1);

	insertInviter($connexion, 1, 1, 'Guitariste, Chanteur, Compositeur');
	insertInviter($connexion, 1, 2, 'Bassiste, Chanteur, Compositeur');
	insertInviter($connexion, 1, 3, 'Batteuse');
	insertInviter($connexion, 1, 4, 'Pianiste');

	insertInviter($connexion, 2, 1, 'Guitariste, Chanteur, Compositeur');
	insertInviter($connexion, 2, 2, 'Bassiste, Chanteur, Compositeur');
	insertInviter($connexion, 2, 3, 'Batteuse');
	insertInviter($connexion, 2, 4, 'Pianiste');

	insertInviter($connexion, 3, 1, 'Guitariste, Chanteur, Compositeur');
	insertInviter($connexion, 3, 2, 'Bassiste, Chanteur, Compositeur');
	insertInviter($connexion, 3, 3, 'Batteuse');
	insertInviter($connexion, 3, 4, 'Pianiste');

	insertInviter($connexion, 4, 1, 'Guitariste, Chanteur, Compositeur');
	insertInviter($connexion, 4, 2, 'Bassiste, Chanteur, Compositeur');
	insertInviter($connexion, 4, 3, 'Batteuse');
	insertInviter($connexion, 4, 4, 'Pianiste');

	insertInviter($connexion, 5, 1, 'Guitariste, Chanteur, Compositeur');
	insertInviter($connexion, 5, 2, 'Bassiste, Chanteur, Compositeur');
	insertInviter($connexion, 5, 3, 'Batteuse');
	insertInviter($connexion, 5, 4, 'Pianiste');

	insertInviter($connexion, 6, 1, 'Guitariste, Chanteur, Compositeur');
	insertInviter($connexion, 6, 2, 'Bassiste, Chanteur, Compositeur');
	insertInviter($connexion, 6, 3, 'Batteuse');
	insertInviter($connexion, 6, 4, 'Pianiste');

	insertFAIREPARTIE($connexion, 1, 1, '2018-09-01', 'Guitariste, Chanteur, Compositeur', 1);
	insertFAIREPARTIE($connexion, 2, 1, '2018-09-01', 'Bassiste, CHanteur, Compositeur', 1);
	insertFAIREPARTIE($connexion, 3, 1, '2018-09-01', 'Batteuse', 0);
	insertFAIREPARTIE($connexion, 4, 1, '2018-09-01', 'Pianiste', 0);

	insertProduire($connexion, 1, 1, '2018-09-01', '2022-07-13');
	insertProduire($connexion, 2, 1, '2018-09-01', '2022-07-13');
	insertProduire($connexion, 3, 1, '2018-09-01', '2022-07-13');
	insertProduire($connexion, 4, 1, '2018-09-01', '2022-07-13');
	insertProduire($connexion, 5, 1, '2018-09-01', '2022-07-13');
	insertProduire($connexion, 6, 1, '2018-09-01', '2022-07-13');

	insertPosseder($connexion, 1, 1);
	insertPosseder($connexion, 2, 1);
	insertPosseder($connexion, 3, 1);
	insertPosseder($connexion, 4, 1);
	insertPosseder($connexion, 5, 1);
	insertPosseder($connexion, 6, 1);
}

// connexion à la BD, retourne un lien de connexion
function getConnexionBD() {
	$connexion = mysqli_connect(SERVEUR, UTILISATRICE, MOTDEPASSE, BDD);
	if (mysqli_connect_errno()) {
	    printf("Échec de la connexion : %s\n", mysqli_connect_error());
	    exit();
	}
	mysqli_query($connexion,'SET NAMES UTF8'); // noms en UTF8
	return $connexion;
}

// déconnexion de la BD
function deconnectBD($connexion) {
	mysqli_close($connexion);
}

// nombre d'instances d'une table $nomTable
function countInstances($connexion, $nomTable) {
	$requete = "SELECT COUNT(*) AS nb FROM $nomTable";
	$res = mysqli_query($connexion, $requete);
	if($res != FALSE) {
		$row = mysqli_fetch_assoc($res);
		return $row['nb'];
	}
	return -1;  // valeur négative si erreur de requête (ex, $nomTable contient une valeur qui n'est pas une table)
}

// retourne les instances d'une table $nomTable
function getInstances($connexion, $nomTable) {
	$requete = "SELECT * FROM $nomTable";
	$res = mysqli_query($connexion, $requete);
	$instances = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $instances;
}

// retourne les instances d'épisodes numérotés 1 et 2 
function getEpisodesPrepared($connexion) {
	$requete = "SELECT titre FROM Episodes WHERE numero = ?";
	$stmt = mysqli_prepare($connexion, $requete);
	if($stmt == false) {
		return null;
	}
	mysqli_stmt_bind_param($stmt, "i", $numEpisode); // lier la variable $var au paramètre de la requête
	// $var à 1 pour afficher les épisodes numérotés 1
	$numEpisode = 1;
	mysqli_stmt_execute($stmt); // exécution de la requête
	$episodes1 = mysqli_stmt_get_result($stmt);  // récupération des tuples résultats dans la variable $episodes1

	// $var à 2 pour afficher les épisodes numérotés 2
	$numEpisode = 2;
	mysqli_stmt_execute($stmt); // pas besoin de lier, exécution directe de la requête
	$episodes2 = mysqli_stmt_get_result($stmt);  // récupération des tuples résultats dans la variable $episodes1
	return array("episodes1" => $episodes1, "episodes2" => $episodes2);
}

// retourne les informations sur la chanson nommée $nomChanson
function getSongByName($connexion, $nomChanson) {
	$requete = "SELECT * FROM CHANSON WHERE titreC LIKE "."\"$nomChanson\"".";";
	$res = mysqli_query($connexion, $requete);
	$series = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $series;
}

function getPlaylistByName($connexion, $titreLec) {
	$requete = "SELECT * FROM LISTE_DE_LECTURE WHERE titreLec LIKE "."\"$titreLec\"".";";
	$res = mysqli_query($connexion, $requete);
	$series = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $series;
}

function get_idA_By_nomAlbum($connexion, $nomAlbum) {
	if($nomAlbum='Ne Sait Pas')
	{
		$res =0;
		return $res;
	}else{
		$requete = "SELECT idA FROM ALBUM WHERE titreA LIKE "."\"$nomAlbum\"".";";
		$prepare = mysqli_query($connexion, $requete);
		while($row=mysqli_fetch_assoc($prepare))
		{
			$res = $row['idA'];
		}
		return $res;
	}
}

function get_idG_By_nomGroupe($connexion, $nomGroupe) {
	$requete = "SELECT * FROM GROUPE WHERE nomG LIKE "."\"$nomGroupe\"".";";
	$prepare = mysqli_query($connexion, $requete);
	while($row=mysqli_fetch_assoc($prepare))
	{
		$res = $row['idG'];
	}
	return $res;
}

function get_idGE_By_nomGE($connexion, $nomGenre) {
	$requete = "SELECT idGE FROM GENRE WHERE nom_genre = "."\"$nomGenre\"".";";
	$prepare = mysqli_query($connexion, $requete);
	while($row=mysqli_fetch_assoc($prepare))
	{
		$res = $row['idGE'];
	}
	return $res;
}

function Is_nomG_exists($connexion, $nomGroupe) { 
	$requete = "SELECT nomG FROM GROUPE WHERE nomg LIKE "."\"$nomGroupe\"".";";
	$prepare = mysqli_query($connexion, $requete);
	while($row=mysqli_fetch_assoc($prepare))
	{
		$res = $row['nomG'];
	}
	return $res;
}

// insère une nouvelle chanson nommée $nomChanson
function insertSong($connexion, $nomChanson, $id, $année, $type, $forme, $idA, $numero_piste) {
	if($type<0){
		$type = 0;}
	if($année<1)
	{
		if($idA==0)
		{
			if($numero_piste==0)
			{
				$requete = "INSERT INTO CHANSON VALUES (NULL, $id, "."\"$nomChanson\"".", DEFAULT, $type, '$forme', NULL);";
				$prepare=mysqli_prepare($connexion,$requete);
				$res = mysqli_stmt_execute($prepare);
				return $res;
			}else{
				$requete = "INSERT INTO CHANSON VALUES (NULL, $id, "."\"$nomChanson\"".", DEFAULT, $type, '$forme', $numero_piste);";
				$prepare=mysqli_prepare($connexion,$requete);
				$res = mysqli_stmt_execute($prepare);
				return $res;
			}
		}else{
			
			if($numero_piste==0)
			{
				$requete = "INSERT INTO CHANSON VALUES ($idA, $id, "."\"$nomChanson\"".", DEFAULT, $type, '$forme', NULL);";
				$prepare=mysqli_prepare($connexion,$requete);
				$res = mysqli_stmt_execute($prepare);
				return $res;
			}else{
				$requete = "INSERT INTO CHANSON VALUES ($idA, $id, "."\"$nomChanson\"".", DEFAULT, $type, '$forme', $numero_piste);";
				$prepare=mysqli_prepare($connexion,$requete);
				$res = mysqli_stmt_execute($prepare);
				return $res;
			}
		}
	}else{
		if($idA==0)
		{
			if($numero_piste==0)
			{
				$requete = "INSERT INTO CHANSON VALUES (NULL, $id, "."\"$nomChanson\"".", $année, $type, '$forme', NULL);";
				$prepare=mysqli_prepare($connexion,$requete);
				$res = mysqli_stmt_execute($prepare);
				return $res;
			}else{
				$requete = "INSERT INTO CHANSON VALUES (NULL, $id, "."\"$nomChanson\"".", $année, $type, '$forme', $numero_piste);";
				$prepare=mysqli_prepare($connexion,$requete);
				$res = mysqli_stmt_execute($prepare);
				return $res;
			}

		}else{
			if($numero_piste==0)
			{
				$requete = "INSERT INTO CHANSON VALUES ($idA, $id, "."\"$nomChanson\"".", $année, $type, '$forme', NULL);";
				$prepare=mysqli_prepare($connexion,$requete);
				$res = mysqli_stmt_execute($prepare);
				return $res;
			}else{
				$requete = "INSERT INTO CHANSON VALUES ($idA, $id, "."\"$nomChanson\"".", $année, $type, '$forme', $numero_piste);";
				$prepare=mysqli_prepare($connexion,$requete);
				$res = mysqli_stmt_execute($prepare);
				return $res;
			}
		}
	}
}

function insertGroup($connexion, $nomGroupe, $id, $année) {
	
	$requete="INSERT INTO GROUPE VALUES($id, "."\"$nomGroupe\"".", $année, DEFAULT );";
	$prepare=mysqli_prepare($connexion,$requete);
	$res = mysqli_stmt_execute($prepare);
	return $res;
}

function insertENREGISTRER($connexion, $idG, $idV){
	$requete="INSERT INTO ENREGISTRER VALUES($idG, $idV);";
	$prepare=mysqli_prepare($connexion,$requete);
	$res = mysqli_stmt_execute($prepare);
	return $res;
}

function insertGenre($connexion, $idG, $nom) {
	
	$requete="INSERT INTO GENRE VALUES($idG, "."\"$nom\"".", $idG);";
	$prepare=mysqli_prepare($connexion,$requete);
	$res = mysqli_stmt_execute($prepare);
	return $res;
}

function insertPropriete($connexion, $idP, $filesize, $playcount, $lastplayed, $skipcount) {
	if($lastplayed<0){
		$requete="INSERT INTO PROPRIÉTÉ VALUES($idP, $filesize, $playcount, NULL, $skipcount);";
	}else{
		$requete="INSERT INTO PROPRIÉTÉ VALUES($idP, $filesize, $playcount, $lastplayed, $skipcount);";
	}
	$prepare=mysqli_prepare($connexion,$requete);
	$res = mysqli_stmt_execute($prepare);
	return $res;
}

function insertDécrire($connexion, $idV, $idP) {
	$requete="INSERT INTO DÉCRIRE VALUES($idV, $idP);";
	$prepare=mysqli_prepare($connexion,$requete);
	$res = mysqli_stmt_execute($prepare);
	return $res;
}

function get_Last_Id_Song($connexion)
{
	$requete="SELECT * FROM CHANSON";
	$prepare = mysqli_query($connexion, $requete);
	while($row=mysqli_fetch_assoc($prepare))
	{
		$res = $row['idC'];
	}
	$idAfter = $res + 1;
	return $idAfter;
}

function get_Last_Id_PLAYLIST($connexion)
{
	$res=0;
	$requete="SELECT * FROM LISTE_DE_LECTURE";
	$prepare = mysqli_query($connexion, $requete);
	while($row=mysqli_fetch_assoc($prepare))
	{
		$res = $row['idLec'];
	}
	$idAfter = $res + 1;
	return $idAfter;
}

function insertPosseder($connexion, $idc, $idGE) {
	
	$requete="INSERT INTO POSSÉDER VALUES($idc, $idGE);";
	$prepare=mysqli_prepare($connexion,$requete);
	$res = mysqli_stmt_execute($prepare);
	return $res;
}

function insertVersion($connexion, $idc, $nV, $année, $chemin, $durée) {
	
	$requete="INSERT INTO VERSION VALUES($idc, $nV, $année, $durée, "."\"$chemin\""." );";
	$prepare=mysqli_prepare($connexion,$requete);
	$res = mysqli_stmt_execute($prepare);
	return $res;
}

function insertFAIREPARTIE($connexion, $idM, $idG, $deb, $role, $mb){
	$requete="INSERT INTO FAIRE_PARTIE VALUES($idM, $idG, '$deb', '$role', $mb);";
	$prepare=mysqli_prepare($connexion,$requete);
	$res = mysqli_stmt_execute($prepare);
	return $res;
}

function insertProduire($connexion, $idC, $idV, $deb, $fin){
	$requete="INSERT INTO PRODUIRE VALUES($idC, $idV, '$deb', '$fin');";
	$prepare=mysqli_prepare($connexion,$requete);
	$res = mysqli_stmt_execute($prepare);
	return $res;
}

function insertInviter($connexion, $idC, $idM, $commentaire){
	$requete="INSERT INTO INVITER VALUES($idC, $idM, "."\"$commentaire\""."  );";
	$prepare=mysqli_prepare($connexion,$requete);
	$res = mysqli_stmt_execute($prepare);
	return $res;
}

function insertInterpreter($connexion, $idc, $idG) {
	
	$requete="INSERT INTO INTERPRÉTER VALUES($idc, $idc, $idG );";
	$prepare=mysqli_prepare($connexion,$requete);
	$res = mysqli_stmt_execute($prepare);
	return $res;
}

function insertAlbum($connexion, $idA, $titreA, $year, $producer) {
	if($year<1)
	{
		$requete="INSERT INTO ALBUM VALUES($idA, "."\"$titreA\"".", DEFAULT, "."\"$producer\""." );";
		$prepare=mysqli_prepare($connexion,$requete);
		$res = mysqli_stmt_execute($prepare);
		return $res;
	}else{
		$requete="INSERT INTO ALBUM VALUES($idA, "."\"$titreA\"".", $year, "."\"$producer\""." );";
		$prepare=mysqli_prepare($connexion,$requete);
		$res = mysqli_stmt_execute($prepare);
		return $res;
	}
}

function search_titreC($connexion, $nomChanson) {
	$requete = "SELECT titreC FROM CHANSON NATURAL JOIN INTERPRÉTER NATURAL JOIN GROUPE WHERE titreC LIKE "."\"$nomChanson\""." LIMIT 1 ;";
	$prepare = mysqli_query($connexion, $requete);
	while($row=mysqli_fetch_assoc($prepare))
	{
		$res = $row['titreC'];
	}
	return $res;
}

function search_dateC($connexion, $nomChanson) {
	$requete = "SELECT date_création FROM CHANSON NATURAL JOIN INTERPRÉTER NATURAL JOIN GROUPE WHERE titreC LIKE "."\"$nomChanson\""." LIMIT 1 ;";
	$prepare = mysqli_query($connexion, $requete);
	while($row=mysqli_fetch_assoc($prepare))
	{
		$res = $row['date_création'];
	}
	return $res;
}
function search_typeC($connexion, $nomChanson) {
	$requete = "SELECT typec FROM CHANSON NATURAL JOIN INTERPRÉTER NATURAL JOIN GROUPE WHERE titreC LIKE "."\"$nomChanson\""." LIMIT 1 ;";
	$prepare = mysqli_query($connexion, $requete);
	while($row=mysqli_fetch_assoc($prepare))
	{
		$res = $row['typec'];
	}
	return $res;
}

function search_nomG($connexion, $nomChanson) {
	$requete = "SELECT nomG FROM CHANSON NATURAL JOIN INTERPRÉTER NATURAL JOIN GROUPE WHERE titreC LIKE "."\"$nomChanson\""." LIMIT 1 ;";
	$prepare = mysqli_query($connexion, $requete);
	while($row=mysqli_fetch_assoc($prepare))
	{
		$res = $row['nomG'];
	}
	return $res;
}

function search_nomA($connexion, $nomChanson) {
	$requete = "SELECT titreA FROM CHANSON NATURAL JOIN INTERPRÉTER NATURAL JOIN ALBUM WHERE titreC LIKE "."\"$nomChanson\""." LIMIT 1 ;";
	$prepare = mysqli_query($connexion, $requete);
	while($row=mysqli_fetch_assoc($prepare))
	{
		$res = $row['titreA'];
	}
	return $res;
}


// fonction pour obtenir les n plus grandes/petites valeurs
function max_limit($connexion, $table, $param_OUT, $param_IN, $limite, $ordre){

	$requete = 'SELECT '.$param_OUT.' FROM '.$table.' ORDER BY '.$param_IN.' '.$ordre.' LIMIT '.$limite.' ;';
	$res = mysqli_query($connexion, $requete);
	$instances = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $instances;		
}

function insertPlaylist($connexion, $idLec, $titreLec)
{
	$dateLec = date('Y-m-d');
	$requete="INSERT INTO LISTE_DE_LECTURE VALUES($idLec, "."\"$titreLec\"".", '$dateLec');";
	$prepare=mysqli_prepare($connexion,$requete);
	$res = mysqli_stmt_execute($prepare);
	return $res;
}

function insertMusicien($connexion, $idM, $nomM, $prenomM, $nom_scene) {
	$requete="INSERT INTO MUSICIEN VALUES($idM, "."\"$nomM\"".", "."\"$prenomM\"".", "."\"$nom_scene\""." );";
	$prepare=mysqli_prepare($connexion,$requete);
	$res = mysqli_stmt_execute($prepare);
	return $res;
}

function insertPERIODE($connexion, $deb, $fin){
	$requete="INSERT INTO PERIODE VALUES('$deb', '$fin');";
	$prepare=mysqli_prepare($connexion,$requete);
	$res = mysqli_stmt_execute($prepare);
	return $res;
}

function Get_Under_Gender($connexion, $nomGenre)
{
	$requete = "SELECT nom_genre FROM GENRE WHERE nom_genre LIKE %"."\"$nomGenre\""."%;";
	$prepare = mysqli_query($connexion, $requete);
	while($row=mysqli_fetch_assoc($prepare))
	{
		$res = $row['nom_genre'];
	}
	return $res;

}

function SQL_TO_TAB($connexion, $nomGenre, $durée, $nb_ligne, $idLec)
{
	$TabDurée = array();
	$TabTitre = array();
	$TabIDV = array();
	$TabIDA = array();
	$TabNUM_PISTE = array();

	if($nomGenre=='Tous les genres ( au hasard )'){
		$requete = "WITH MyCte AS (SELECT ROW_NUMBER() OVER(ORDER BY RAND()) AS IDPLACE, Durée, titreC, idV, idA, numero_piste FROM VERSION NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE) SELECT * FROM (SELECT * FROM MyCte ORDER BY IDPLACE ASC LIMIT $nb_ligne)T";
	}elseif($nomGenre=='Classical'){
		$requete = "WITH MyCte AS (SELECT ROW_NUMBER() OVER(ORDER BY RAND()) AS IDPLACE, Durée, titreC, idV, idA, numero_piste FROM VERSION NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE WHERE nom_genre LIKE '%Class%') SELECT * FROM (SELECT * FROM MyCte ORDER BY IDPLACE ASC LIMIT $nb_ligne)T";
	}else{
		$requete = "WITH MyCte AS (SELECT ROW_NUMBER() OVER(ORDER BY RAND()) AS IDPLACE, Durée, titreC, idV, idA, numero_piste FROM VERSION NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE WHERE nom_genre LIKE '%$nomGenre%') SELECT * FROM (SELECT * FROM MyCte ORDER BY IDPLACE ASC LIMIT $nb_ligne)T";
	}

	$prepare = mysqli_query($connexion, $requete);
	while($row=mysqli_fetch_assoc($prepare))
	{
		$TabDurée[] = $row['Durée'];
		$TabTitre[] = $row['titreC'];
		$TabIDV[] = $row['idV'];
		$TabIDA[] = $row['idA'];
		$TabNUM_PISTE[] = $row['numero_piste'];
	}

	array_pop($TabDurée);
	array_pop($TabTitre);
	array_pop($TabIDV);
	array_pop($TabIDA);
	array_pop($TabNUM_PISTE);

	GET_MOYENNE($TabDurée, $durée, $connexion, $nomGenre, $nb_ligne, $TabTitre, $idLec, $TabIDV, $TabIDA, $TabNUM_PISTE);
}

function insertJouer($connexion, $idLec, $idV)
{
	$requete="INSERT INTO JOUER VALUES($idLec, $idV);";
	$prepare=mysqli_prepare($connexion,$requete);
	$res = mysqli_stmt_execute($prepare);
	return $res;
}

function insertInclure($connexion, $idLec, $idA, $numero_piste)
{
	$requete="INSERT INTO INCLURE VALUES($idLec, $idA, $numero_piste);";
	$prepare=mysqli_prepare($connexion,$requete);
	$res = mysqli_stmt_execute($prepare);
	return $res;
}

function GET_MOYENNE($TabDurée, $temps, $connexion, $nomGenre, $nb_ligne, $TabTitre, $idLec, $TabIDV, $TabIDA, $TabNUM_PISTE)
{
	$temps_min = $temps-50;
	$moyenne=0;
	$i=1;
	while($i != $nb_ligne)
	{
		$moyenne = $moyenne+$TabDurée[$i-1];
		$i=$i+1;
	}
	if($moyenne>$temps)
	{
		return SQL_TO_TAB($connexion, $nomGenre, $temps, $nb_ligne-1, $idLec);
	}elseif($moyenne<$temps_min)
	{
		return SQL_TO_TAB($connexion, $nomGenre, $temps, $nb_ligne+1, $idLec);
	}else{
		insertJouer_AND_insertInclure($connexion, $TabIDV, $nb_ligne, $idLec, $TabIDA, $TabNUM_PISTE);
	}
}

function nom_aléatoire_GRP($connexion, $sep) {
    $requete ="SELECT nomG FROM GROUPE ORDER BY RAND() LIMIT 1 ";
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))
    {
        $res=$row["nomG"];
        $nom=explode(" ", $res);
    }
    return $res[0];
}

function nom_aléatoire_GENRE($connexion, $sep) {
    $requete ="SELECT nom_genre FROM GENRE ORDER BY RAND() LIMIT 1 ";
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))
    {
        $res=$row["nom_genre"];
        $nom=explode("; ", $res);
    }
    return $nom[0];
}

function nom_aléatoire_SONG($connexion, $sep) {
    $requete ="SELECT titreC FROM CHANSON ORDER BY RAND() LIMIT 1 ";
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))
    {
        $res=$row["titreC"];
        $nom=explode(" ", $res);
    }
    return $nom[0];
}

function insertJouer_AND_insertInclure($connexion, $TabIDV, $nb_ligne, $idLec, $TabIDA, $TabNUM_PISTE)
{
	$i=1;
	while($i != $nb_ligne){
		insertJouer($connexion, $idLec, $TabIDV[$i-1]);
		insertInclure($connexion, $idLec, $TabIDA[$i-1], $TabNUM_PISTE[$i-1]);
		$i++;
	}
}

function get_id_By_NomPlaylist($connexion, $nom){
	$requete = "SELECT idLec FROM LISTE_DE_LECTURE WHERE titreLec LIKE "."\"$nom\"".";";
	$prepare = mysqli_query($connexion, $requete);
	while($row=mysqli_fetch_assoc($prepare))
	{
		$res=$row['idLec'];
	}
	return $res;
}


//supprime une ligne d'une table
function delete_ligne($connexion, $idtransmis, $ntable, $idtable) {
	$requete = "DELETE FROM $ntable WHERE $idtable = $idtransmis;";
	$res = mysqli_query($connexion, $requete);
	mysqli_commit($connexion);
	return $res;
}

function compte_chanson_groupe($connexion) {
	$requete ="SELECT g.idG, b.nomG, COUNT(g.idG) AS value_occurrence FROM INTERPRÉTERg natural Left join GROUPEb GROUP BY idG ORDER BY value_occurrence DESC LIMIT 5 ;";
	$res = mysqli_query($connexion, $requete);
	$resultat = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $resultat;
}

// selection un élément d'une table passé en paramètre
function SELECT_E_WHERE_LIKE($connexion, $table, $element, $param1, $param2 ){

	$requete = 'SELECT '.$element.' FROM '.$table.'WHERE'.$param1.' LIKE "'.$param2.'";';
	$res = mysqli_query($connexion, $requete);
	return $res;		
}

?>
