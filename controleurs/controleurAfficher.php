<?php 
$message = "";

$chanson = getInstances($connexion, "CHANSON");
if($chanson == null || count($chanson) == 0) {
	$message .= "Aucune Chanson n'a été trouvée dans la base de données !";
}

$groupe = getInstances($connexion, "GROUPE");
if($groupe == null || count($groupe) == 0) {
	$message .= "Aucun Groupe n'a été trouvée dans la base de données !";
}

$genre = getInstances($connexion, "GENRE");
if($genre == null || count($genre) == 0) {
	$message .= "Aucun Genre n'a été trouvée dans la base de données !";
}

$songs100 = getInstances($connexion, "songs2000");
if($songs100 == null || count($songs100) == 0) {
	$message .= "Aucune BD song100";
}

$poss = getInstances($connexion, "POSSÉDER");
if($poss == null || count($poss) == 0) {
	$message .= "Aucune Possésion ";
}
$CHANSONS_interpretees = get_last_versions_by_idC($connexion, 10);

	if(count($groupe)< 10 && count($chanson) < 10){

		$idG=2; $idc=7; $nV =1; $idA = 2; $idP=7;

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
			$filesize = $songs100['filesize'];
			$playcount = $songs100['playcount'];
			$lastplayed = $songs100['lastplayed'];
			$skipcount = $songs100['skipcount'];


			$is_grp_exist = Is_nomG_exists($connexion, $nom);
			$is_song_exist = Is_song_exists($connexion, $titre);
			$is_titreA_exists = Is_titreA_exists($connexion, $titreA);

			if(empty($is_titreA_exists)){
				insertAlbum($connexion, $idA, $album, $année, 'Unknown');
			}
			
		
			if($is_grp_exist != $nom)
			{
				if($is_song_exist != $titre){
					insertSong($connexion, $titre, $idc, $année, $compil, 'Original', $idA, $track);

					insertGroup($connexion, $nom, $idG, $année);
					insertGenre($connexion, $idG, $nomGE);
					insertPosseder($connexion, $idc, $idG);
					insertVersion($connexion, $idc, $nV, $année, $chemin, $durée);
					insertInterpreter($connexion, $idc, $idG);
					insertPropriete($connexion, $idP, $filesize, $playcount, $lastplayed, $skipcount);
					insertDécrire($connexion, $idc, $idP);

					$idG++; $idc++; $idP++; $idA++;
				}else{
					$idV2 = get_Last_Id_Version($connexion, $titre);
					$nV2 = get_last_nV_By_titreC($connexion, $titre);
					$idC2 = get_idC_By_titreC($connexion, $titre);
					$nV2 = $nV2+1;

					insertGroup($connexion, $nom, $idG, $année);
					insertVersion($connexion, $idV2, $nV2, $année, $chemin, $durée);
					insertInterpreter2($connexion, $idV2, $idC2, $idG);
					insertPropriete($connexion, $idP, $filesize, $playcount, $lastplayed, $skipcount);
					insertDécrire($connexion, $idC2, $idP);
					
					$idG++; $idP++;
				}

			}else
			{	
				if($is_song_exist != $titre){
					$idGexist=get_idG_By_nomGroupe($connexion, $nom);
					insertSong($connexion, $titre, $idc, $année, $compil, 'Original', $idA, $track);

					insertGenre($connexion, $idGexist, $nomGE);
					insertPosseder($connexion, $idc, $idGexist);
					insertVersion($connexion, $idc, $nV, $année, $chemin, $durée);
					insertInterpreter($connexion, $idc, $idGexist);
					insertPropriete($connexion, $idP, $filesize, $playcount, $lastplayed, $skipcount);
					insertDécrire($connexion, $idc, $idP);
					
					$idc++; $idP++; $idA++;
				}else{

					$idV2 = get_Last_Id_Version($connexion, $titre);
					$nV2 = get_last_nV_By_titreC($connexion, $titre);
					$idC2 = get_idC_By_titreC($connexion, $titre);
					$nV2 = $nV2+1;
					$idGexist=get_idG_By_nomGroupe($connexion, $nom);

					insertVersion($connexion, $idV2, $nV2, $année, $chemin, $durée);
					insertInterpreter2($connexion, $idV2, $idC2, $idGexist);
					insertPropriete($connexion, $idP, $filesize, $playcount, $lastplayed, $skipcount);
					insertDécrire($connexion, $idC2, $idP);

					$idP++;
				}
			}
		}
	}

?>
