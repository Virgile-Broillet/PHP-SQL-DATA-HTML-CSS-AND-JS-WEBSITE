<?php 
$message = "";

$groupe = getInstances($connexion, "GROUPE");
if($groupe == null || count($groupe) == 0) {
	$message .= "Aucun Groupe n'a été trouvée dans la base de données !";
}

$genre = getInstances($connexion, "GENRE");
if($genre == null || count($genre) == 0) {
	$message .= "Aucun Genre n'a été trouvée dans la base de données !";
}

$songs100 = getInstances($connexion, "songs100");
if($songs100 == null || count($songs100) == 0) {
	$message .= "Aucune BD song100";
}

$poss = getInstances($connexion, "POSSÉDER");
if($poss == null || count($poss) == 0) {
	$message .= "Aucune Possésion ";
}

?>

<?php 

	$idG=2; $idc=7; $nV =1; $idA = 2;
	foreach($songs100 as $songs100) {
		$album = $songs100["album"];
		$track = $songs100['track'];
		$nom  = $songs100['artist'];
		$nomGE = $songs100['genre'];
		$année = $songs100['year'];
		$titre = $songs100["title"];
		$durée = $songs100['length'];
		$chemin = $songs100['filename'];
		$compil = $songs100['compilation'];


		insertSong($connexion, $titre, $idc, $année, $compil, 'Original', $idA, $track);
		$is_grp_exist = Is_nomGE_exists($connexion, $nom);

		insertAlbum($connexion, $idA, $album, $année, 'Unknown');
		$idA++;

		if($is_grp_exist = 1)
		{
			insertGroup($connexion, $nom, $idG, $année);
			insertGenre($connexion, $idG, $nomGE);
			insertPosseder($connexion, $idc, $idG);
			insertVersion($connexion, $idc, $nV, $année, $chemin, $durée);
			insertInterpreter($connexion, $idc, $idG);

			$idG++; $idc++;
		}else
		{	
			$idGexist=get_idG_By_nomGroupe($connexion, $nom);

			insertGroup($connexion, $nom, $idGexist, $année);
			insertGenre($connexion, $idGexist, $nomGE);
			insertPosseder($connexion, $idc, $idGexist);
			insertVersion($connexion, $idc, $nV, $année, $chemin, $durée);
			insertInterpreter($connexion, $idc, $idGexist);
			
			$idc++;
		}
	}
?>
