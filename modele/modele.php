<?php

error_reporting(0); //masque les erreurs inutiles aux utilisateurs (vous en retrouverez sur quelques pages du sites)

function VERIF($nom) { //fonction qui vérifie si un nom de playlist et ou de chanson contient sous une quelconque forme le mot 'DROP' pour éviter les DROP TABLE SONGS
    $mot_vilain = array("DROP", "drop", "Drop", "dRop", "drOp", "droP", "DRop", "DrOp", "DroP", "dROp", "dRoP", "drOp", "drOP", "dROP", "DrOP", "DRoP", "DROp", "DROPTABLE","*", "DELETE", "CHANSON", "delete", "\""); // tableau de mot à exclure
    $tableau = explode(' ', $nom);//utilisation de la fonction explode avec comme argument un nom et un séparateur ici " ", renvoie les noms de la plalist
    foreach($tableau as $mot)//test de touts le mots explodes
    {
        if (in_array($mot, $mot_vilain))//si un des mot vérifié est contenue dans les mots explode
        {
            return true; // VRAI, un DROP Table a été tenté (petite suprise hehe)
        }else{return false;}// FAUX tous va bien
    }
}

function ADD_FLYING_NUGGETS($connexion) //cette fonction sert à l'insertion de mon PROPRE groupe de Musique après réinistialisation de la BD
{
    insertAlbum($connexion, 1, 'First Fly', 2022, 'Romain Gayral'); //fonction d'insertion de mon album
    insertGroup($connexion, 'Flying Nuggets', 1, 2022); //fonction d'insertion du groupe
    insertSong($connexion, 'Halloween Secret Party', 1, 2022, 0, 'Original', 1, 1); //fonction d'insertion de ma première chanson
    insertSong($connexion, 'Flying Nuggets', 2, 2022, 0, 'Original', 1, 2); //fonction d'insertion de ma seconde chanson
    insertSong($connexion, 'Lost in Two Worlds', 3, 2022, 0, 'Original', 1, 3); //fonction d'insertion de ma troisième chanson
    insertSong($connexion, 'The Interstellar Funky Pirates Of The Sea II', 4, 2022, 0, 'Original', 1, 4); //fonction d'insertion de ma quatrième chanson
    insertSong($connexion, 'Mega Disco Giga Disto', 5, 2022, 0, 'Original', 1, 5); //fonction d'insertion de ma cinquième chanson
    insertSong($connexion, 'Yoan The Savior Shark', 6, 2022, 0, 'Original', 1, 6); //fonction d'insertion de ma sixième chanson
    insertVersion($connexion, 1, 1, 2022, 'https://youtu.be/pxlSSLFZeeo', 177); //insertion des version , avec les liens youtube, et des durées
    insertVersion($connexion, 2, 1, 2022, 'https://youtu.be/2y2HGgKYEkQ', 246); //insertion des version , avec les liens youtube, et des durées
    insertVersion($connexion, 3, 1, 2022, 'https://youtu.be/GSwEqwpChys', 261); //insertion des version , avec les liens youtube, et des durées
    insertVersion($connexion, 4, 1, 2022, 'https://youtu.be/TBB5vEeEdKs', 256); //insertion des version , avec les liens youtube, et des durées
    insertVersion($connexion, 5, 1, 2022, 'https://youtu.be/_N2XLteXBoY', 244); //insertion des version , avec les liens youtube, et des durées
    insertVersion($connexion, 6, 1, 2022, 'https://youtu.be/FzwnqBg6Ut4', 159); //insertion des version , avec les liens youtube, et des durées
    insertGenre($connexion, 1, 'Metal'); //insertion du Genre des Musiques
    insertMusicien($connexion, 1, 'Broillet', 'Virgile', 'Virgile'); //insertions des musiciens
    insertMusicien($connexion, 2, 'Brulé', 'Gabriel', 'Gabriel'); //insertions des musiciens
    insertMusicien($connexion, 3, 'Jobinot', 'Mathilde', 'Mathilde'); //insertions des musiciens
    insertMusicien($connexion, 4, 'NULL', 'Kassime', 'Kassime'); //insertions des musiciens
    insertPropriete($connexion, 1, 4249600, 488, 350, 0); //insertion des propriétés
    insertPropriete($connexion, 2, 5899264, 463, 200, 0); //insertion des propriétés
    insertPropriete($connexion, 3, 6278144, 347, 100, 0); //insertion des propriétés
    insertPropriete($connexion, 4, 6170624, 394, 205, 0); //insertion des propriétés
    insertPropriete($connexion, 5, 5874688, 523, 500, 0); //insertion des propriétés
    insertPropriete($connexion, 6, 2547712, 268, 150, 3); //insertion des propriétés
    insertPERIODE($connexion, '2018-09-01', '2022-07-13'); //insertion de la période

    //Remplissage des Jointures des tables

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


// nombre de genres distincts dans la table genre
function countInstances_genre($connexion) {
    $requete = "SELECT COUNT(DISTINCT(nom_genre)) AS nb FROM GENRE";
    $res = mysqli_query($connexion, $requete);
    if($res != FALSE) {
        $row = mysqli_fetch_assoc($res);
        return $row['nb'];
    }
    return -1;  // valeur négative si erreur de requête
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

//Fonction qui récupère la moyenne de la durée de la playlist $titreLec, puis y insert dans un tableau
function MOYENNE_PLAYLIST($connexion, $titreLec){
    $requete = "SELECT AVG(Durée) AS TEMPS FROM VERSION NATURAL JOIN JOUER NATURAL JOIN LISTE_DE_LECTURE WHERE titreLec = $titreLec";
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))
    {
        $res = $row['TEMPS'];
    }
    return $res;
}

//récupère les $valeur (nombre de chansons, durée, ect..) de la table LISTE_DE_LECTURE selon le $titreLec (titre de la playlist), et ressort le résultat sous forme de tableau d'odre croissant
function get_chansons_playlist_ASC($connexion, $valeur ,$titreLec){
    $Tab = array();
    $requete ="SELECT $valeur FROM CHANSON NATURAL JOIN INTERPRÉTER NATURAL JOIN VERSION NATURAL JOIN DÉCRIRE NATURAL JOIN PROPRIÉTÉ NATURAL JOIN JOUER NATURAL JOIN LISTE_DE_LECTURE WHERE titreLec = '$titreLec' ORDER BY PROPRIÉTÉ.$valeur ASC";
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))
    {
        $Tab[] = $row[$valeur];
    }
    return $Tab;
}

//récupère les titres des chansons contenus dans la playlist selon le $titreLec (titre de la playlist), et ressort le résultat sous forme de tableau d'odre croissant
function get_chansons_playlist_ASC_get_titreC($connexion, $valeur ,$titreLec){
    $Tab = array();
    $requete ="SELECT titreC FROM CHANSON NATURAL JOIN INTERPRÉTER NATURAL JOIN VERSION NATURAL JOIN DÉCRIRE NATURAL JOIN PROPRIÉTÉ NATURAL JOIN JOUER NATURAL JOIN LISTE_DE_LECTURE WHERE titreLec = '$titreLec' ORDER BY PROPRIÉTÉ.$valeur ASC";
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))
    {
        $Tab[] = $row['titreC'];
    }
    return $Tab;
}

//récupère les titres des chansons contenus dans la playlist selon le $titreLec (titre de la playlist), et ressort le résultat sous forme de tableau d'odre DECROISSANT
function get_chansons_playlist_DESC_get_titreC($connexion, $valeur ,$titreLec){
    $Tab = array();
    $requete ="SELECT titreC FROM CHANSON NATURAL JOIN INTERPRÉTER NATURAL JOIN VERSION NATURAL JOIN DÉCRIRE NATURAL JOIN PROPRIÉTÉ NATURAL JOIN JOUER NATURAL JOIN LISTE_DE_LECTURE WHERE titreLec = '$titreLec' ORDER BY PROPRIÉTÉ.$valeur DESC";
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))
    {
        $Tab[] = $row['titreC'];
    }
    return $Tab;
}

//récupère les $valeur (nombre de chansons, durée, ect..) de la table LISTE_DE_LECTURE selon le $titreLec (titre de la playlist), et ressort le résultat sous forme de tableau d'odre DECROISSANT
function get_chansons_playlist_DESC($connexion, $valeur ,$titreLec){
    $Tab = array();
    $requete ="SELECT $valeur FROM CHANSON NATURAL JOIN INTERPRÉTER NATURAL JOIN VERSION NATURAL JOIN DÉCRIRE NATURAL JOIN PROPRIÉTÉ NATURAL JOIN JOUER NATURAL JOIN LISTE_DE_LECTURE WHERE titreLec = '$titreLec' ORDER BY PROPRIÉTÉ.$valeur DESC";
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))
    {
        $Tab[] = $row[$valeur];
    }
    return $Tab;
}

//récupère les $valeur (nombre de chansons, durée, ect..) de la table LISTE_DE_LECTURE selon le $titreLec (titre de la playlist), et ressort le résultat sous forme de tableau
function get_chansons_playlist($connexion, $valeur ,$titreLec){
    $Tab = array();
    $requete ="SELECT $valeur FROM CHANSON NATURAL JOIN INTERPRÉTER NATURAL JOIN VERSION NATURAL JOIN DÉCRIRE NATURAL JOIN PROPRIÉTÉ NATURAL JOIN JOUER NATURAL JOIN LISTE_DE_LECTURE WHERE titreLec = '$titreLec'";
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))
    {
        $Tab[] = $row[$valeur];
    }
    return $Tab;
}

//retourne les informations sur la playlist nommé $titreLec
function getPlaylistByName($connexion, $titreLec) {
    $requete = "SELECT * FROM LISTE_DE_LECTURE WHERE titreLec LIKE "."\"$titreLec\"".";"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $res = mysqli_query($connexion, $requete);
    $series = mysqli_fetch_all($res, MYSQLI_ASSOC);
    return $series;
}

//retourne l'id de l'album nommé $nomAlbum sous forme de tableau
function get_idA_By_nomAlbum($connexion, $nomAlbum) {
    if($nomAlbum=='Ne sait pas'){$res = 0; return $res;}

    $requete = "SELECT * FROM ALBUM WHERE titreA LIKE "."\"$nomAlbum\"".";"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare)) //récupère toutes les valeurs du tableau SQL
    {
        $res = $row['idA']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'idA' pour pouvoir y accéder
    }
    return $res;
}

//retourne l'id des Groupes nommé $nomGroupe sous forme de tableau
function get_idG_By_nomGroupe($connexion, $nomGroupe) {
    $requete = "SELECT * FROM GROUPE WHERE nomG LIKE "."\"$nomGroupe\"".";"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['idG']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'idG' pour pouvoir y accéder
    }
    return $res;
}

//retourne l'id de la musique nommé $titreC sous forme de tableau
function get_idC_By_titreC($connexion, $titreC) {
    $requete = "SELECT * FROM CHANSON WHERE titreC = "."\"$titreC\"".";"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['idC']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'idC' pour pouvoir y accéder
    }
    return $res;
}

//retourne l'idV de la musique nommé $titreC sous forme de tableau
function get_last_nV_By_titreC($connexion, $titreC) {
    $requete = "SELECT * FROM VERSION NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON WHERE titreC = "."\"$titreC\""." ORDER BY VERSION.numéroV DESC LIMIT 1;"; 
			//cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['numéroV']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'numéroV' pour pouvoir y accéder
    }
    return $res;
}

//récupère l'id du genre en utilisant le nom du Genre $nomGenre
function get_idGE_By_nomGE($connexion, $nomGenre) {
    $requete = "SELECT idGE FROM GENRE WHERE nom_genre = "."\"$nomGenre\"".";"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['idGE']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'idGE' pour pouvoir y accéder
    }
    return $res;
}


//vérifie si le Groupe existe dans la BD en utilisant le nom du dit groupe
function Is_nomG_exists($connexion, $nomGroupe) {
    $requete = "SELECT nomG FROM GROUPE WHERE nomg = "."\"$nomGroupe\"".";"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['nomG']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'nomG' pour pouvoir y accéder
    }
    return $res;
}

//vérifie si l'album existe dans la BD en utilisant le nom du dit album
function Is_titreA_exists($connexion, $titreA) {
    $requete = "SELECT titreA FROM ALBUM WHERE titreA = "."\"$titreA\"".";"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['titreA']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'titreA' pour pouvoir y accéder
    }
    return $res;
}

//vérifie si la Chanson existe dans la BD en utilisant le nom de la dite chanson
function Is_song_exists($connexion, $nomChanson) {
    $requete = "SELECT titreC FROM CHANSON WHERE titreC = "."\"$nomChanson\"".";"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['titreC']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'titreC' pour pouvoir y accéder
    }
    return $res;
}

//renvoie le x chanson dont le playcount est le plus élévé (x = $limit)
function max_playcount($connexion){
    $requete = "SELECT playcount, titreC FROM PROPRIÉTÉ NATURAL JOIN DÉCRIRE NATURAL JOIN VERSION NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON ORDER BY PROPRIÉTÉ.playcount DESC LIMIT 1";
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res[0] = $row['titreC']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'titreC' pour pouvoir y accéder
        $res[1] = $row['playcount']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'playcount' pour pouvoir y accéder
    }
    return $res;
}

//renvoie le lastplay le plus éleveé des chansons
function max_last_played($connexion){
    $requete = "SELECT lastplayed, titreC FROM PROPRIÉTÉ NATURAL JOIN DÉCRIRE NATURAL JOIN VERSION NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON ORDER BY PROPRIÉTÉ.lastplayed DESC LIMIT 1";
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res[0] = $row['titreC']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'titreC' pour pouvoir y accéder
        $res[1] = $row['lastplayed']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'lastplayed' pour pouvoir y accéder
    }
    return $res;
}

//renvoie le skipcount le plus élever des chansons
function max_skip_count($connexion){
    $requete = "SELECT skipcount, titreC FROM PROPRIÉTÉ NATURAL JOIN DÉCRIRE NATURAL JOIN VERSION NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON ORDER BY PROPRIÉTÉ.skipcount DESC LIMIT 1";
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res[0] = $row['titreC']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'titreC' pour pouvoir y accéder
        $res[1] = $row['skipcount']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'skipcount' pour pouvoir y accéder
    }
    return $res;
}

//renvoie le nom du groupe avec le plus de chanson dans la BD + le nb de chansons
function max_song_group($connexion){
    $requete = "SELECT count(*) AS NB , nomG FROM GROUPE NATURAL JOIN INTERPRÉTER GROUP BY nomG ORDER BY `NB` DESC LIMIT 1";
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res[0] = $row['NB']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'NB' pour pouvoir y accéder
        $res[1] = $row['nomG']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'nomG' pour pouvoir y accéder
    }
    return $res;
}

//renvoie le nombre de chanson dont le lastplay est NULL
function last_played($connexion){
    $requete = "SELECT COUNT(*) AS NB FROM PROPRIÉTÉ WHERE lastplayed IS NULL";
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['NB']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'NB' pour pouvoir y accéder
    }
    return $res;
}

//==============( Fonctionq utiles das VUE AJOUTER et dans l'AFFICHAGE )===========================

// retourne les informations sur la chanson nommée $nomChanson
function getSongByName($connexion, $nomChanson) {
    $requete = "SELECT * FROM CHANSON WHERE titreC LIKE "."\"$nomChanson\"".";"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $res = mysqli_query($connexion, $requete);
    $result = mysqli_fetch_all($res, MYSQLI_ASSOC);
    return $result;
}

function get_last_versions_by_idC($connexion, $limit){
	$requete = "SELECT c.idC, g.nomG, v.DateV, c.titreC, p.playcount, v.Durée, p.lastplayed, p.skipcount 
	FROM `CHANSON`c NATURAL JOIN `INTERPRÉTER`s NATURAL JOIN `GROUPE`g 
		  NATURAL JOIN `VERSION`v NATURAL JOIN `DÉCRIRE`d NATURAL JOIN `PROPRIÉTÉ`p 
	ORDER BY idC desc LIMIT ".$limit." ;";
	 // on récupère les chansons dernièrement ajoutées
	 // on cible les chansons liées par `INTERPRÉTER` 
    $res = mysqli_query($connexion, $requete);
    $result = mysqli_fetch_all($res, MYSQLI_ASSOC);
    return $result;
}

function get_last_songs_by_idC($connexion, $limit){
	$requete = "SELECT c.idC, g.nomG, c.titreC, c.numero_piste, c.date_création
	FROM `CHANSON`c NATURAL JOIN `INTERPRÉTER`s NATURAL JOIN `GROUPE`g  
	ORDER BY idC desc LIMIT ".$limit." ;";
	 // on récupère les chansons dernièrement ajoutées
	 // on cible les chansons liées par `INTERPRÉTER` 
    $res = mysqli_query($connexion, $requete);
    $result = mysqli_fetch_all($res, MYSQLI_ASSOC);
    return $result;
}

function get_info_member($connexion, $idG)
{
	$requete = "SELECT nom_de_scène FROM `MUSICIEN` NATURAL JOIN `FAIRE_PARTIE`
				NATURAL JOIN `PERIODE` NATURAL JOIN `GROUPE`
				WHERE idG = $idG ;"; 
    $prepare = mysqli_query($connexion, $requete);
    $result = mysqli_fetch_all($prepare, MYSQLI_ASSOC);
    return $result;
}

function delete_song($connexion, $nom)
{
	$idC = SELECT_E_WHERE_LIKE($connexion, "`CHANSON`", "idC", "titreC", $nom )[0];
	if($idC != NULL )
	{
	$requete = "DELETE FROM `POSSÉDER` WHERE idC = $idC ; 
				DELETE FROM `INTERPRÉTER` WHERE idC = $idC ; 
				DELETE FROM `CHANSONS` WHERE idC = $idC ;"; 
    $res = mysqli_query($connexion, $requete);
    mysqli_commit($connexion);
	return "SUPPRIME";
	}
	else {return "ERREUR DE SUPPRESSION";}
}

//==================================================================================

// insère une nouvelle chanson nommée $nomChanson, avec l'id $id, la date de composition $date, le type $type, la forme $forme, lié à l'album $idA, avec le numéro de piste $numéro_piste 
//cette fonction est assez longue et redondante mais nécessaire pour la bonne insertion en prenant en compte tous les paramètres
function insertSong($connexion, $nomChanson, $id, $année, $type, $forme, $idA, $numero_piste) {

    if($type<0){//si le type dans la BD est inférieur à 0
        $type = 0;} //il devient 0;
    if($année<1)//si l'année dans la BD ou lors de l'inséertion est inférieur à 1
    {
        if($idA==0)//si l'idA est = 0 dans la BD ou lors de l'insertion
        {
            if($numero_piste==0) // si le numéro de piste est 0 (ce qui n'est pas possible dans un album)
            {
                $requete = "INSERT INTO CHANSON VALUES (NULL, $id, "."\"$nomChanson\"".", DEFAULT, $type, '$forme', NULL);"; //l'idA (premier élément) est NULL, $numéro_de_piste (dernier élément) = NULL
                $prepare=mysqli_prepare($connexion,$requete);
                $res = mysqli_stmt_execute($prepare);
                if($res){return $res;}else{ // si la requete ne marche pas
                    $requete = "INSERT INTO CHANSON VALUES (NULL, $id, '$nomChanson', DEFAULT, $type, '$forme', NULL);"; // on réessaie en incluant les guillemets dans le titre de la chanson
                    $prepare=mysqli_prepare($connexion,$requete);
                    $res2 = mysqli_stmt_execute($prepare);
                    return $res2;
                }
            }else{
                $requete = "INSERT INTO CHANSON VALUES (NULL, $id, "."\"$nomChanson\"".", DEFAULT, $type, '$forme', $numero_piste);"; //si le numéro de piste n'est pas = 0 on l'insère simplement
                $prepare=mysqli_prepare($connexion,$requete);
                $res = mysqli_stmt_execute($prepare);
                if($res){return $res;}else{
                    $requete = "INSERT INTO CHANSON VALUES (NULL, $id, '$nomChanson', DEFAULT, $type, '$forme', $numero_piste);"; //on réessaie avec les guillemets dans le titre de la chanson
                    $prepare=mysqli_prepare($connexion,$requete);
                    $res2 = mysqli_stmt_execute($prepare);
                    return $res2;
                }
            }
        }else{ // l'idA possède une valeur autre que 0, on répète les requètes mais en insérant $idA
            
            if($numero_piste==0)
            {
                $requete = "INSERT INTO CHANSON VALUES ($idA, $id, "."\"$nomChanson\"".", DEFAULT, $type, '$forme', NULL);";
                $prepare=mysqli_prepare($connexion,$requete);
                $res = mysqli_stmt_execute($prepare);
                if($res){return $res;}else{
                    $requete = "INSERT INTO CHANSON VALUES ($idA, $id, '$nomChanson', DEFAULT, $type, '$forme', NULL);";
                    $prepare=mysqli_prepare($connexion,$requete);
                    $res2 = mysqli_stmt_execute($prepare);
                    return $res2;
                }
            }else{
                $requete = "INSERT INTO CHANSON VALUES ($idA, $id, "."\"$nomChanson\"".", DEFAULT, $type, '$forme', $numero_piste);";
                $prepare=mysqli_prepare($connexion,$requete);
                $res = mysqli_stmt_execute($prepare);
                if($res){return $res;}else{
                    $requete = "INSERT INTO CHANSON VALUES ($idA, $id, '$nomChanson', DEFAULT, $type, '$forme', $numero_piste);";
                    $prepare=mysqli_prepare($connexion,$requete);
                    $res2 = mysqli_stmt_execute($prepare);
                    return $res2;
                }
            }
        }
    }else{ // l'année est supérieur à 1, on répète les requètes mais en insérant $année 
        if($idA==0)
        {
            if($numero_piste==0)
            {
                $requete = "INSERT INTO CHANSON VALUES (NULL, $id, "."\"$nomChanson\"".", $année, $type, '$forme', NULL);";
                $prepare=mysqli_prepare($connexion,$requete);
                $res = mysqli_stmt_execute($prepare);
                if($res){return $res;}else{
                    $requete = "INSERT INTO CHANSON VALUES (NULL, $id, '$nomChanson', $année, $type, '$forme', NULL);";
                    $prepare=mysqli_prepare($connexion,$requete);
                    $res2 = mysqli_stmt_execute($prepare);
                    return $res2;
                }
            }else{
                $requete = "INSERT INTO CHANSON VALUES (NULL, $id, "."\"$nomChanson\"".", $année, $type, '$forme', $numero_piste);";
                $prepare=mysqli_prepare($connexion,$requete);
                $res = mysqli_stmt_execute($prepare);
                if($res){return $res;}else{
                    $requete = "INSERT INTO CHANSON VALUES (NULL, $id, '$nomChanson', $année, $type, '$forme', $numero_piste);";
                    $prepare=mysqli_prepare($connexion,$requete);
                    $res2 = mysqli_stmt_execute($prepare);
                    return $res2;
                }
            }

        }else{
            if($numero_piste==0)
            {
                $requete = "INSERT INTO CHANSON VALUES ($idA, $id, "."\"$nomChanson\"".", $année, $type, '$forme', NULL);";
                $prepare=mysqli_prepare($connexion,$requete);
                $res = mysqli_stmt_execute($prepare);
                if($res){return $res;}else{
                    $requete = "INSERT INTO CHANSON VALUES ($idA, $id, '$nomChanson', $année, $type, '$forme', NULL);";
                    $prepare=mysqli_prepare($connexion,$requete);
                    $res2 = mysqli_stmt_execute($prepare);
                    return $res2;
                }
            }else{
                $requete = "INSERT INTO CHANSON VALUES ($idA, $id, "."\"$nomChanson\"".", $année, $type, '$forme', $numero_piste);";
                $prepare=mysqli_prepare($connexion,$requete);
                $res = mysqli_stmt_execute($prepare);
                if($res){return $res;}else{
                    $requete = "INSERT INTO CHANSON VALUES ($idA, $id, '$nomChanson', $année, $type, '$forme', $numero_piste);";
                    $prepare=mysqli_prepare($connexion,$requete);
                    $res2 = mysqli_stmt_execute($prepare);
                    return $res2;
                }
            }
        }
    }
}

//insert dans la BD un Groupe avec le nom $nomGroupe, l'id $id, l'année $année
function insertGroup($connexion, $nomGroupe, $id, $année) {
    
    $requete="INSERT INTO GROUPE VALUES($id, "."\"$nomGroupe\"".", $année, DEFAULT );"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare=mysqli_prepare($connexion,$requete);
    $res = mysqli_stmt_execute($prepare);
    return $res;
}

//insert dans la BD dans la Table ENREGISTRER avec l'idG $idG, l'idV $idV
function insertENREGISTRER($connexion, $idG, $idV){
    $requete="INSERT INTO ENREGISTRER VALUES($idG, $idV);"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare=mysqli_prepare($connexion,$requete);
    $res = mysqli_stmt_execute($prepare);
    return $res;
}

//insert dans la BD le Genre avec l'idG $idG, le nom du genre $nom
function insertGenre($connexion, $idG, $nom) {
    
    $requete="INSERT INTO GENRE VALUES($idG, "."\"$nom\"".", $idG);"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare=mysqli_prepare($connexion,$requete);
    $res = mysqli_stmt_execute($prepare);
    return $res;
}

//insert dans la BD dans la Table PROPRIETE avec l'idP $idP, le filesize $filesize, playcount $playcount, skipcount $skipcount
function insertPropriete($connexion, $idP, $filesize, $playcount, $lastplayed, $skipcount) {
    if($lastplayed<0){//si lastplayed est null
        $requete="INSERT INTO PROPRIÉTÉ VALUES($idP, $filesize, $playcount, NULL, $skipcount);"; //on insert la valeur null a lastplay
    }else{
        $requete="INSERT INTO PROPRIÉTÉ VALUES($idP, $filesize, $playcount, $lastplayed, $skipcount);"; // sinon on lui insère sa valeur
    }
    $prepare=mysqli_prepare($connexion,$requete);
    $res = mysqli_stmt_execute($prepare);
    return $res;
}

//insert dans la BD dans la Table DÉCRIRE avec l'idV $idV, l'idP $idP
function insertDécrire($connexion, $idV, $idP) {
    $requete="INSERT INTO DÉCRIRE VALUES($idV, $idP);";
    $prepare=mysqli_prepare($connexion,$requete);
    $res = mysqli_stmt_execute($prepare);
    return $res;
}

//récupère le dernier id de la Table Chanson et lui ajoute 1, le ressort sous forme de tableau
function get_Last_Id_Song($connexion)
{
    $requete="SELECT * FROM CHANSON";
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['idC']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'idC' pour pouvoir y accéder
    }
    $idAfter = $res + 1; //ajoute 1 à la derniere valeur du tableau $res
    return $idAfter; //resort le dernier id + 1
}

function get_Last_Id_Version($connexion)
{
    $requete="SELECT * FROM VERSION";
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['idV']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'idV' pour pouvoir y accéder
    }
    $idAfter = $res + 1; //ajoute 1 à la derniere valeur du tableau $res
    return $idAfter; //resort le dernier id + 1
}

//récupère le dernier id de la Table LISTE_DE_LECTURE et lui ajoute 1, le ressort sous forme de tableau
function get_Last_Id_PLAYLIST($connexion)
{
    $res=0;
    $requete="SELECT * FROM LISTE_DE_LECTURE";
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['idLec']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'idLec' pour pouvoir y accéder
    }
    $idAfter = $res + 1; //ajoute 1 à la derniere valeur du tableau $res
    return $idAfter; //resort le dernier id + 1
}

//insert dans la BD dans la Table POSSEDER avec l'idC $idC, l'idGE $idGE
function insertPosseder($connexion, $idc, $idGE) {
    
    $requete="INSERT INTO POSSÉDER VALUES($idc, $idGE);";
    $prepare=mysqli_prepare($connexion,$requete);
    $res = mysqli_stmt_execute($prepare);
    return $res;
}

//insert dans la BD dans la Table VERSION avec l'idV $idV, le numéro de version $nV, l'année de la version $année, le chemin de la musique $chemin, la durée de la musique $durée
function insertVersion($connexion, $idc, $nV, $année, $chemin, $durée) {
    
    if($année<0){$année = 1;} // si l'année est inférieur à 0 elle devient 1
    if($durée<0){$durée = 1;} // si la durée est inférieur à 0 elle devient 1
    $requete="INSERT INTO VERSION VALUES($idc, $nV, $année, $durée, "."\"$chemin\""." );"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare=mysqli_prepare($connexion,$requete);
    $res = mysqli_stmt_execute($prepare);
    if($res){return $res;}else{ // si la fonction ne s'execute pas, essaie avec les guillemets pour le chemin de la musique
        $requete = "INSERT INTO VERSION VALUES($idc, $nV, $année, $durée, '$chemin');"; // active les guillemets dans le chemin de la musique
        $prepare=mysqli_prepare($connexion,$requete);
        $res2 = mysqli_stmt_execute($prepare);
        return $res2;
    }
}

//insert dans la BD dans la Table FAIRE_PARTIE avec l'idM $idM, l'idG, $idG, période de début $deb, période de fin $fin, le rôle du musicien $role, et le booléen membre fondateur $mb
function insertFAIREPARTIE($connexion, $idM, $idG, $deb, $role, $mb){
    $requete="INSERT INTO FAIRE_PARTIE VALUES($idM, $idG, '$deb', '$role', $mb);";
    $prepare=mysqli_prepare($connexion,$requete);
    $res = mysqli_stmt_execute($prepare);
    return $res;
}

//insert dans la BD dans la Table PRODUIRE avec l'idC $idC, l'idV, $idV, période de début $deb, période de fin $fin
function insertProduire($connexion, $idC, $idV, $deb, $fin){
    $requete="INSERT INTO PRODUIRE VALUES($idC, $idV, '$deb', '$fin');";
    $prepare=mysqli_prepare($connexion,$requete);
    $res = mysqli_stmt_execute($prepare);
    return $res;
}

//insert dans la BD dans la Table INVITER avec l'idC $idC, l'idM, $idM, le commentaire $commentaire
function insertInviter($connexion, $idC, $idM, $commentaire){
    $requete="INSERT INTO INVITER VALUES($idC, $idM, "."\"$commentaire\""."  );"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare=mysqli_prepare($connexion,$requete);
    $res = mysqli_stmt_execute($prepare);
    return $res;
}

//insert dans la BD dans la Table INTERPRETER avec l'idC $idC, l'idG, $idG
function insertInterpreter($connexion, $idc, $idG) {
    
    $requete="INSERT INTO INTERPRÉTER VALUES($idc, $idc, $idG );";
    $prepare=mysqli_prepare($connexion,$requete);
    $res = mysqli_stmt_execute($prepare);
    return $res;
}

function insertInterpreter2($connexion, $idV, $idc, $idG) {
    
    $requete="INSERT INTO INTERPRÉTER VALUES($idV, $idc, $idG );";
    $prepare=mysqli_prepare($connexion,$requete);
    $res = mysqli_stmt_execute($prepare);
    return $res;
}

//insert dans la BD dans la Table ALBUM avec l'idA $idA, le titre de l'album, $titreA, l'année de sortie de l'album $year, et le producteur de l'album $producer
function insertAlbum($connexion, $idA, $titreA, $year, $producer) {
    if($year<1)//si l'année est inférieur à 1
    {
        $requete="INSERT INTO ALBUM VALUES($idA, "."\"$titreA\"".", DEFAULT, "."\"$producer\""." );"; //on ajoute l'année DEFAULT + //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
        $prepare=mysqli_prepare($connexion,$requete);
        $res = mysqli_stmt_execute($prepare);
        if($res){return $res;}else{
            $requete = "INSERT INTO ALBUM VALUES($idA, '$titreA', DEFAULT, "."\"$producer\""." );"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
            $prepare=mysqli_prepare($connexion,$requete);
            $res2 = mysqli_stmt_execute($prepare);
            return $res2;
        }
    }else{ //sinon on insère l'année normalement
        $requete="INSERT INTO ALBUM VALUES($idA, "."\"$titreA\"".", $year, "."\"$producer\""." );"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
        $prepare=mysqli_prepare($connexion,$requete);
        $res = mysqli_stmt_execute($prepare);
        if($res){return $res;}else{
            $requete = "INSERT INTO ALBUM VALUES($idA, '$titreA', $year, "."\"$producer\""." );"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
            $prepare=mysqli_prepare($connexion,$requete);
            $res2 = mysqli_stmt_execute($prepare);
            return $res2;
        }
    }
}

//recherche le titre d'une chanson selon le nom d'une chanson
function search_titreC($connexion, $nomChanson) {
    $requete = "SELECT titreC FROM CHANSON NATURAL JOIN INTERPRÉTER NATURAL JOIN GROUPE WHERE titreC LIKE "."\"$nomChanson\""." LIMIT 1 ;"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare = mysqli_query($connexion, $requete);
    if($prepare==false){
        $requete = "SELECT titreC FROM CHANSON NATURAL JOIN INTERPRÉTER NATURAL JOIN GROUPE WHERE titreC LIKE '"."$nomChanson"."' LIMIT 1 ;";
        $prepare = mysqli_query($connexion, $requete);
    }
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['titreC']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'titreC' pour pouvoir y accéder
    }
    return $res; //resort le tableau titreC avec UNE SEUL musique (LIMIT 1)
}

//recherche le nom d'un genre selon le titre d'une chanson
function search_nom_genre($connexion, $nomChanson) {
    $requete = "SELECT nom_genre FROM CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE WHERE titreC LIKE "."\"$nomChanson\""." LIMIT 1 ;"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare = mysqli_query($connexion, $requete);
    if($prepare==false){
        $requete = "SELECT nom_genre FROM CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE WHERE titreC LIKE '"."$nomChanson"."' LIMIT 1 ;";
        $prepare = mysqli_query($connexion, $requete);
    }
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['nom_genre']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'nom_genre' pour pouvoir y accéder
        $nom = explode("; ", $res);
    }
    return $nom; //resort le tableau nom_genre avec UNE SEUL musique (LIMIT 1)
}

//recherche la date d'une chanson selon le nom de la chanson
function search_dateC($connexion, $nomChanson) {
    $requete = "SELECT date_création FROM CHANSON NATURAL JOIN INTERPRÉTER NATURAL JOIN GROUPE WHERE titreC LIKE "."\"$nomChanson\""." LIMIT 1 ;"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare = mysqli_query($connexion, $requete);
    if($prepare==false){
        $requete = "SELECT date_création FROM CHANSON NATURAL JOIN INTERPRÉTER NATURAL JOIN GROUPE WHERE titreC LIKE '"."$nomChanson"."' LIMIT 1 ;";
        $prepare = mysqli_query($connexion, $requete);
    }
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['date_création']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'date_création' pour pouvoir y accéder
    }
    return $res; //resort le tableau date_création avec UNE SEUL date (LIMIT 1)
}

//recherche le type d'une chanson selon le nom de la chanson
function search_typeC($connexion, $nomChanson) {
    $requete = "SELECT typec FROM CHANSON NATURAL JOIN INTERPRÉTER NATURAL JOIN GROUPE WHERE titreC LIKE "."\"$nomChanson\""." LIMIT 1 ;"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare = mysqli_query($connexion, $requete);
    if($prepare==false){
        $requete = "SELECT typec FROM CHANSON NATURAL JOIN INTERPRÉTER NATURAL JOIN GROUPE WHERE titreC LIKE '"."$nomChanson"."' LIMIT 1 ;";
        $prepare = mysqli_query($connexion, $requete);
    }
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['typec']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'typec' pour pouvoir y accéder
    }
    return $res; //resort le tableau typec avec UN SEUL type (LIMIT 1)
}

//recherche le nom du groupe selon le nom de la chanson
function search_nomG($connexion, $nomChanson) {
    $requete = "SELECT nomG FROM CHANSON NATURAL JOIN INTERPRÉTER NATURAL JOIN GROUPE WHERE titreC LIKE "."\"$nomChanson\""." LIMIT 1 ;"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare = mysqli_query($connexion, $requete);
    if($prepare==false){
        $requete = "SELECT nomG FROM CHANSON NATURAL JOIN INTERPRÉTER NATURAL JOIN GROUPE WHERE titreC LIKE '"."$nomChanson"."' LIMIT 1 ;";
        $prepare = mysqli_query($connexion, $requete);
    }
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['nomG']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'nomG' pour pouvoir y accéder
    }
    return $res; //resort le tableau nomG avec UN SEUL nom de groupe (LIMIT 1)
}

//recherche le nom d'album selon le nom de la chanson
function search_nomA($connexion, $nomChanson) {
    $requete = "SELECT titreA FROM CHANSON NATURAL JOIN INTERPRÉTER NATURAL JOIN ALBUM WHERE titreC LIKE "."\"$nomChanson\""." LIMIT 1 ;"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare = mysqli_query($connexion, $requete);
    if($prepare==false){
        $requete = "SELECT titreA FROM CHANSON NATURAL JOIN INTERPRÉTER NATURAL JOIN ALBUM WHERE titreC LIKE '"."$nomChanson"."' LIMIT 1 ;";
        $prepare = mysqli_query($connexion, $requete);
    }
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['titreA']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'titreA' pour pouvoir y accéder
    }
    return $res; //resort le tableau titreA avec UN SEUL nom d'album (LIMIT 1)
}

//insert dans la BD dans la Table LISTE_DE_LECTURE avec l'id de la playlist $idLec, le nom de la playlist $titreLec
function insertPlaylist($connexion, $idLec, $titreLec)
{
    $dateLec = date('Y-m-d'); // défini la date de création de la playlist à la date du jour
    $requete="INSERT INTO LISTE_DE_LECTURE VALUES($idLec, "."\"$titreLec\"".", '$dateLec');"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare=mysqli_prepare($connexion,$requete);
    $res = mysqli_stmt_execute($prepare);
    return $res;
}

//insert dans la BD dans la Table MUSICIEN avec l'id du Musicien $idM, le nom du musicien $nomM, le prénom de celui-ci $prenomM, ainsi que son nom de scène $nom_scène 
function insertMusicien($connexion, $idM, $nomM, $prenomM, $nom_scene) {
    $requete="INSERT INTO MUSICIEN VALUES($idM, "."\"$nomM\"".", "."\"$prenomM\"".", "."\"$nom_scene\""." );"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare=mysqli_prepare($connexion,$requete);
    $res = mysqli_stmt_execute($prepare);
    return $res;
}

//insert dans la BD dans la Table PERIODE avec la période de debut $deb, et la période de fin $fin
function insertPERIODE($connexion, $deb, $fin){
    $requete="INSERT INTO PERIODE VALUES('$deb', '$fin');";
    $prepare=mysqli_prepare($connexion,$requete);
    $res = mysqli_stmt_execute($prepare);
    return $res;
}

//Récupère les noms des sous Genres d'un genre avec un morceau du Genre Principal, 
function Get_Under_Gender($connexion, $nomGenre)
{
    $requete = "SELECT nom_genre FROM GENRE WHERE nom_genre LIKE %"."\"$nomGenre\""."%;"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['nom_genre']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'nom_genre' pour pouvoir y accéder
    }
    return $res; //resort le tableau nom_genre

}

function plus_jouees($connexion)
{
	$requete="SELECT * FROM `VERSION` NATURAL JOIN `DÉCRIRE` NATURAL JOIN `PROPRIÉTÉ` WHERE playcount > 15";
	$res = mysqli_query($connexion, $requete);
    $result = mysqli_fetch_all($res, MYSQLI_ASSOC);
    return $result;
}

function plus_recentes($connexion)
{
	$requete="SELECT * FROM `VERSION` NATURAL JOIN `DÉCRIRE` NATURAL JOIN `PROPRIÉTÉ` WHERE lastplayed < 100 || lastplayed IS NULL";
	$res = mysqli_query($connexion, $requete);
    $result = mysqli_fetch_all($res, MYSQLI_ASSOC);
    return $result; // renvoi les versions jouees le plus récemment
}

function plus_skipcount($connexion)
{
	$requete="SELECT * FROM `VERSION` NATURAL JOIN `DÉCRIRE` NATURAL JOIN `PROPRIÉTÉ` WHERE skipcount <8";
	$res = mysqli_query($connexion, $requete);
    $result = mysqli_fetch_all($res, MYSQLI_ASSOC); 
    return $result; // renvoi les versions les moins 'skippées'
}

//Cette fonction me range au hasard un tableau de Durée, titreC, idv, idA, numéro_piste, 
//puis j'ajoute une colonne ROW_NUMBER avec comme nom IDPLACE, me permettant de donné un ID a ce nouveaux tableau, 
//je vais par la suite, intégrer se tableau dans un FROM, pour éviter la requette longue, j'utilise une définition de fonction MyCTE
function SQL_TO_TAB($connexion, $nomGenre, $durée, $nb_ligne, $idLec ) //nb_ligne est défini arbitrairement il sera incrémenté ou décrémenter dans GET_MOYENNE
{   //Définition des 5 tableaux qui accueilleront mes résultats    // VERSION PAR DEFAUT
    $TabDurée = array();
    $TabTitre = array();
    $TabIDV = array();
    $TabIDA = array();
    $TabNUM_PISTE = array();

    if($nomGenre=='Tous les genres ( au hasard )'){
        //Si le nom de Genre est "Tous les genre ..." Alors ma fonction me rangera au hasard TOUTES les Musiques de tous genre
        $requete = "WITH MyCte AS (SELECT ROW_NUMBER() OVER(ORDER BY RAND()) AS IDPLACE, Durée, titreC, idV, idA, numero_piste FROM VERSION NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE) SELECT * FROM (SELECT * FROM MyCte ORDER BY IDPLACE ASC LIMIT $nb_ligne)T";
    }elseif($nomGenre=='Classical'){
        //Si le nom de Genre est "Classical" Alors ma fonction me rangera au hasard TOUTES les Musiques dont le nom_genre contient le mot 'Classical'
        $requete = "WITH MyCte AS (SELECT ROW_NUMBER() OVER(ORDER BY RAND()) AS IDPLACE, Durée, titreC, idV, idA, numero_piste FROM VERSION NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE WHERE nom_genre LIKE '%Class%') SELECT * FROM (SELECT * FROM MyCte ORDER BY IDPLACE ASC LIMIT $nb_ligne)T";
    }else{
        //Sinon, ma fonction me rangera au hasard TOUTEs les musiques dont le nom_genre contient le mot $nomGenre
        $requete = "WITH MyCte AS (SELECT ROW_NUMBER() OVER(ORDER BY RAND()) AS IDPLACE, Durée, titreC, idV, idA, numero_piste FROM VERSION NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE WHERE nom_genre LIKE '%$nomGenre%') SELECT * FROM (SELECT * FROM MyCte ORDER BY IDPLACE ASC LIMIT $nb_ligne)T";
    }

    //préparation trivial de la requete
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs des 5 tableaux retournés par SQL
    {
        //remplis les tableau un par un avec les données correspondantes
        $TabDurée[] = $row['Durée']; 
        $TabTitre[] = $row['titreC'];
        $TabIDV[] = $row['idV'];
        $TabIDA[] = $row['idA'];
        $TabNUM_PISTE[] = $row['numero_piste'];
    }

    //supprime la dernière case des tableaux qui est en trop, car le temps $durée est dépassé
    array_pop($TabDurée);
    array_pop($TabTitre);
    array_pop($TabIDV);
    array_pop($TabIDA);
    array_pop($TabNUM_PISTE);

    //appel à la fonction GET_MOYENNE
    GET_MOYENNE($TabDurée, $durée, $connexion, $nomGenre, $nb_ligne, $TabTitre, $idLec, $TabIDV, $TabIDA, $TabNUM_PISTE);
}


// COPIE POUR REUSSIR L'INSERTION DE VERSIONS AVEC DES ATTRIBUTS
// DEFINIS POUR CREER UNE PLAYLIST
function SQL_TO_TAB_PLAYLIST($connexion, $nomGenre, $durée, $nb_ligne, $idLec, $radio ) //nb_ligne est défini arbitrairement il sera incrémenté ou décrémenter dans GET_MOYENNE
{   //Définition des 5 tableaux qui accueilleront mes résultats    // VERSION PAR DEFAUT
    $TabDurée = array();
    $TabTitre = array();
    $TabIDV = array();
    $TabIDA = array();
    $TabNUM_PISTE = array();
    $VERSION = '`VERSION`';
	/*	
	 * 		LE BOUTON RADIO SELECTIONNE PAR L'UTILISATEUR DANS VUEPLAYLIST EST RECUPERE ICI GRACE A LA VARIABLE $radio.
	 * 		CETTE VARIABLE EST TRANSMISE A GET_MOYENNE_PLAYLIST POUR PERMETTRE DE RAPPELER A NOUVEAU SQL_TO_TAB_PLAYLIST CORRECTEMENT
	 * 
	 * 		--> IMPORTANT : DANS L'ENONCE IL N'EST PAS PRECISE QUE LES CHANSONS AJOUTEES A LA PLAYLIST DOIVENT NECESSAIREMENT RESPECTER LE GENRE
	 * 		SAISI SI DES CONTRAINTES SUR LES VERSIONS SONT APPLIQUEES EN PLUS.
	 * 		EN EFFET, LES QUESTIONS 5.3 et 5.2 SONT DISTINCTES.
	 * 
	 * 		TOUTEFOIS, NOUS AVONS LAISSE UN TRI SUR LE GENRE SI IL EST SPECIFIE, MAIS :
	 * 			-> LE PRINCIPE DE LA REQUETE EST BASE SUR UN RAND() DES LIGNES EN RESULTAT, SI ON AJOUTE UN CHOIX SUR LES ATTRIBUTS DE VERSIONS
	 * 				LE GENRE DEPENDRA DE LA QUANTITE DE CHANSONS DISPONIBLES AVEC CE GENRE
	 * 
	 * 						
	 */ 
	if($radio == 2){	
		if($nomGenre=='Tous les genres ( au hasard )'){
			//Si le nom de Genre est "Tous les genre ..." Alors ma fonction me rangera au hasard TOUTES les Musiques de tous genre
			$requete = "WITH MyCte AS (SELECT ROW_NUMBER() OVER(ORDER BY RAND()) AS IDPLACE, Durée, titreC, idV, idA, numero_piste FROM PROPRIÉTÉ NATURAL JOIN DÉCRIRE NATURAL JOIN VERSION NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE WHERE playcount > 15) SELECT * FROM (SELECT * FROM MyCte ORDER BY IDPLACE ASC LIMIT $nb_ligne)T";
		}elseif($nomGenre=='Classical'){
			//Si le nom de Genre est "Classical" Alors ma fonction me rangera au hasard TOUTES les Musiques dont le nom_genre contient le mot 'Classical'
			$requete = "WITH MyCte AS (SELECT ROW_NUMBER() OVER(ORDER BY RAND()) AS IDPLACE, Durée, titreC, idV, idA, numero_piste FROM PROPRIÉTÉ NATURAL JOIN DÉCRIRE NATURAL JOIN VERSION  NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE WHERE (nom_genre LIKE '%Class%'  ) AND playcount > 15) SELECT * FROM (SELECT * FROM MyCte ORDER BY IDPLACE ASC LIMIT $nb_ligne)T";
		}else{
			//Sinon, ma fonction me rangera au hasard TOUTEs les musiques dont le nom_genre contient le mot $nomGenre
			$requete = "WITH MyCte AS (SELECT ROW_NUMBER() OVER(ORDER BY RAND()) AS IDPLACE, Durée, titreC, idV, idA, numero_piste FROM PROPRIÉTÉ NATURAL JOIN DÉCRIRE NATURAL JOIN VERSION  NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE WHERE (nom_genre LIKE '%$nomGenre%'  ) AND playcount > 15 ) SELECT * FROM (SELECT * FROM MyCte ORDER BY IDPLACE ASC LIMIT $nb_ligne)T";
		}
    }elseif($radio == 3){
		 if($nomGenre=='Tous les genres ( au hasard )'){
			//Si le nom de Genre est "Tous les genre ..." Alors ma fonction me rangera au hasard TOUTES les Musiques de tous genre
			$requete = "WITH MyCte AS (SELECT ROW_NUMBER() OVER(ORDER BY RAND()) AS IDPLACE, Durée, titreC, idV, idA, numero_piste FROM PROPRIÉTÉ NATURAL JOIN DÉCRIRE NATURAL JOIN VERSION NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE WHERE skipcount <8 ) SELECT * FROM (SELECT * FROM MyCte ORDER BY IDPLACE ASC LIMIT $nb_ligne)T";
		}elseif($nomGenre=='Classical'){
			//Si le nom de Genre est "Classical" Alors ma fonction me rangera au hasard TOUTES les Musiques dont le nom_genre contient le mot 'Classical'
			$requete = "WITH MyCte AS (SELECT ROW_NUMBER() OVER(ORDER BY RAND()) AS IDPLACE, Durée, titreC, idV, idA, numero_piste FROM PROPRIÉTÉ NATURAL JOIN DÉCRIRE NATURAL JOIN VERSION NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE WHERE (nom_genre LIKE '%Class%' ) AND skipcount <8) SELECT * FROM (SELECT * FROM MyCte ORDER BY IDPLACE ASC LIMIT $nb_ligne)T";
		}else{
			//Sinon, ma fonction me rangera au hasard TOUTEs les musiques dont le nom_genre contient le mot $nomGenre
			$requete = "WITH MyCte AS (SELECT ROW_NUMBER() OVER(ORDER BY RAND()) AS IDPLACE, Durée, titreC, idV, idA, numero_piste FROM PROPRIÉTÉ NATURAL JOIN DÉCRIRE NATURAL JOIN VERSION NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE WHERE (nom_genre LIKE '%$nomGenre%'  ) AND skipcount <8) SELECT * FROM (SELECT * FROM MyCte ORDER BY IDPLACE ASC LIMIT $nb_ligne)T";
		}	
	}elseif($radio == 4){
		 if($nomGenre=='Tous les genres ( au hasard )'){
			//Si le nom de Genre est "Tous les genre ..." Alors ma fonction me rangera au hasard TOUTES les Musiques de tous genre
			$requete = "WITH MyCte AS (SELECT ROW_NUMBER() OVER(ORDER BY RAND()) AS IDPLACE, Durée, titreC, idV, idA, numero_piste FROM PROPRIÉTÉ NATURAL JOIN DÉCRIRE NATURAL JOIN VERSION NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE WHERE ( lastplayed < 100 || lastplayed IS NULL )) SELECT * FROM (SELECT * FROM MyCte ORDER BY IDPLACE ASC LIMIT $nb_ligne)T";
		}elseif($nomGenre=='Classical'){
			//Si le nom de Genre est "Classical" Alors ma fonction me rangera au hasard TOUTES les Musiques dont le nom_genre contient le mot 'Classical'
			$requete = "WITH MyCte AS (SELECT ROW_NUMBER() OVER(ORDER BY RAND()) AS IDPLACE, Durée, titreC, idV, idA, numero_piste FROM PROPRIÉTÉ NATURAL JOIN DÉCRIRE NATURAL JOIN VERSION NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE WHERE (nom_genre LIKE '%Class%'  ) AND (lastplayed < 100 || lastplayed IS NULL )) SELECT * FROM (SELECT * FROM MyCte ORDER BY IDPLACE ASC LIMIT $nb_ligne)T";
		}else{
			//Sinon, ma fonction me rangera au hasard TOUTEs les musiques dont le nom_genre contient le mot $nomGenre
			$requete = "WITH MyCte AS (SELECT ROW_NUMBER() OVER(ORDER BY RAND()) AS IDPLACE, Durée, titreC, idV, idA, numero_piste FROM PROPRIÉTÉ NATURAL JOIN DÉCRIRE NATURAL JOIN VERSION NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE WHERE (nom_genre LIKE '%$nomGenre%'  ) AND (lastplayed < 100 || lastplayed IS NULL )) SELECT * FROM (SELECT * FROM MyCte ORDER BY IDPLACE ASC LIMIT $nb_ligne)T";
		}
	}elseif($radio == 1){
		if($nomGenre=='Tous les genres ( au hasard )'){
			//Si le nom de Genre est "Tous les genre ..." Alors ma fonction me rangera au hasard TOUTES les Musiques de tous genre
			$requete = "WITH MyCte AS (SELECT ROW_NUMBER() OVER(ORDER BY RAND()) AS IDPLACE, Durée, titreC, idV, idA, numero_piste FROM PROPRIÉTÉ NATURAL JOIN DÉCRIRE NATURAL JOIN VERSION NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE) SELECT * FROM (SELECT * FROM MyCte ORDER BY IDPLACE ASC LIMIT $nb_ligne)T";
		}elseif($nomGenre=='Classical'){
			//Si le nom de Genre est "Classical" Alors ma fonction me rangera au hasard TOUTES les Musiques dont le nom_genre contient le mot 'Classical'
			$requete = "WITH MyCte AS (SELECT ROW_NUMBER() OVER(ORDER BY RAND()) AS IDPLACE, Durée, titreC, idV, idA, numero_piste FROM PROPRIÉTÉ NATURAL JOIN DÉCRIRE NATURAL JOIN VERSION NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE WHERE (nom_genre LIKE '%Class%'  )) SELECT * FROM (SELECT * FROM MyCte ORDER BY IDPLACE ASC LIMIT $nb_ligne)T";
		}else{
			//Sinon, ma fonction me rangera au hasard TOUTEs les musiques dont le nom_genre contient le mot $nomGenre
			$requete = "WITH MyCte AS (SELECT ROW_NUMBER() OVER(ORDER BY RAND()) AS IDPLACE, Durée, titreC, idV, idA, numero_piste FROM PROPRIÉTÉ NATURAL JOIN DÉCRIRE NATURAL JOIN VERSION NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE WHERE (nom_genre LIKE '%$nomGenre%'  )) SELECT * FROM (SELECT * FROM MyCte ORDER BY IDPLACE ASC LIMIT $nb_ligne)T";
		}
	} 

    //préparation triviale de la requete ( triviale ? j'y crois pas haha ) 
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs des 5 tableaux retournés par SQL
    {
        //remplis les tableau un par un avec les données correspondantes
        $TabDurée[] = $row['Durée']; 
        $TabTitre[] = $row['titreC'];
        $TabIDV[] = $row['idV'];
        $TabIDA[] = $row['idA'];
        $TabNUM_PISTE[] = $row['numero_piste'];
    }

    //supprime la dernière case des tableaux qui est en trop, car le temps $durée est dépassé
    array_pop($TabDurée);
    array_pop($TabTitre);
    array_pop($TabIDV);
    array_pop($TabIDA);
    array_pop($TabNUM_PISTE);

    //appel à la fonction GET_MOYENNE
    GET_MOYENNE_PLAYLIST($TabDurée, $durée, $connexion, $nomGenre, $nb_ligne, $TabTitre, $idLec, $TabIDV, $TabIDA, $TabNUM_PISTE, $radio);
}

//retourne la durée de la playlist et incrémente ou non le nb de ligne si cela est necessaire
function GET_MOYENNE_PLAYLIST($TabDurée, $temps, $connexion, $nomGenre, $nb_ligne, $TabTitre, $idLec, $TabIDV, $TabIDA, $TabNUM_PISTE, $radio) //variables précédemment définis dans SQL_TO_TAB
{
    //definition du temps minimum d'une playlist
    $temps_min = $temps-50;
    //définition de la moyenne 
    $moyenne=0;
    $i=1;
    while($i != $nb_ligne) //tant que $i n'est pas égal au nombre de ligne 
    {
        $moyenne = $moyenne+$TabDurée[$i-1]; //la moyenne est égal à la moyenne + Les durées stoquées dans le Tab TabDurée alimenté dans SQL_TO_TAB_PLAYLIST ou SQL_TO_TAB
        $i=$i+1; //incrémentation de la boucle
    }
    if($moyenne>$temps) // si la moyenne des temps des musiques aléatoire est supérieur au temps saisie par l'utilisateur
    {
		
        return SQL_TO_TAB_PLAYLIST($connexion, $nomGenre, $temps, $nb_ligne-1, $idLec, $radio); //on rappel la fonction SQL_TO_TAB en enlevant une musique (et en regénérant un tableau au hasard)
    }elseif($moyenne<$temps_min)// si la moyenne des temps des musiques aléatoire est inférieur au temps minimum de la playlist calculer plus haut
    {
		
        return SQL_TO_TAB_PLAYLIST($connexion, $nomGenre, $temps, $nb_ligne+1, $idLec, $radio); //on rappel la fonction SQL_TO_TAB en ajoutant une musique (et en regénérant un tableau au hasard)
    }else{  // si la moyenne est comprise entre le temps_min et la durée saisie par l'utilisateur
        insertJouer_AND_insertInclure($connexion, $TabIDV, $nb_ligne, $idLec, $TabIDA, $TabNUM_PISTE, $radio); //on insère JOUER et INCLURE dans la BD avec les informations sur les Musiques des Playlists
    }
}




//retourne la durée de la playlist et incrémente ou non le nb de ligne si cela est necessaire
function GET_MOYENNE($TabDurée, $temps, $connexion, $nomGenre, $nb_ligne, $TabTitre, $idLec, $TabIDV, $TabIDA, $TabNUM_PISTE) //variables précédemment définis dans SQL_TO_TAB
{
    //definition du temps minimum d'une playlist
    $temps_min = $temps-50;
    //définition de la moyenne et de l'entier de boucle
    $moyenne=0;
    $i=1;
    while($i != $nb_ligne) //tant que $i n'est pas égal au nombre de ligne 
    {
        $moyenne = $moyenne+$TabDurée[$i-1]; //la moyenne est égal à la moyenne + Les durées stoquer dans le Tab TabDurée alimenter dans SQL_TO_TAB
        $i=$i+1; //incrémentation de la boucle
    }
    if($moyenne>$temps) // si la moyenne des temps des musiques aléatoire est supérieur au temps saisie par l'utilisateur
    {
        return SQL_TO_TAB($connexion, $nomGenre, $temps, $nb_ligne-1, $idLec); //on rappel la fonction SQL_TO_TAB en enlevant une musique (et en regénérant un tableau au hasard)
    }elseif($moyenne<$temps_min)// si la moyenne des temps des musiques aléatoire est inférieur au temps minimum de la playlist calculer plus haut
    {
        return SQL_TO_TAB($connexion, $nomGenre, $temps, $nb_ligne+1, $idLec); //on rappel la fonction SQL_TO_TAB en ajoutant une musique (et en regénérant un tableau au hasard)
    }else{  // si la moyenne est comprise entre le temps_min et la durée saisie par l'utilisateur
        insertJouer_AND_insertInclure($connexion, $TabIDV, $nb_ligne, $idLec, $TabIDA, $TabNUM_PISTE); //on insère JOUER et INCLURE dans la BD avec les informations sur les Musiques des Playlists
    }
}

//appel aux fonction insertJouer et insertInclure pour faciliter l'insertion
function insertJouer_AND_insertInclure($connexion, $TabIDV, $nb_ligne, $idLec, $TabIDA, $TabNUM_PISTE)
{
    $i=1;//définition de l'entier de boucle
    while($i != $nb_ligne){ // tant que $i n'est pas égal au nb de lignes
        insertJouer($connexion, $idLec, $TabIDV[$i-1]); //appel de INSERTION avec TabIDV remplis lors de l'appel à SQL_TO_TAB
        insertInclure($connexion, $idLec, $TabIDA[$i-1], $TabNUM_PISTE[$i-1]); //appel de INCULRE avec TabIDA et TabNUM_PISTE remplis lors de l'appel à SQL_TO_TAB
        $i++;//incrémentation de l'entier de boucle
    }
}

//pour insérer une seule chanson dans une playlist
function insertion_chanson_playlist($connexion, $idLec, $idA, $numero_piste, $idV)
{
	// verification avant d'ajouter
	if( verif_insert_song_playlist($connexion, $idLec, $idV) == true )
	{
	insertJouer($connexion, $idLec, $idV);
	insertInclure($connexion, $idLec, $idA, $numero_piste);
	return "ok";
	}
	else{return "pas ok";}
}

function verif_insert_song_playlist($connexion, $idLec, $idV)
{
	$requete="COUNT * FROM JOUER WHERE idLec = ".$idLec." AND idV = ".$idV.";";
    $prepare=mysqli_prepare($connexion,$requete);
    $res = mysqli_stmt_execute($prepare);
    if($res == 1) {return false; } //la chanson esrt déjà dedans
    else 		  {return true; } // on peut insérer la chanson d:D yee !!
}

//insert dans la BD dans la Table JOUER avec l'id de la playlist $idLec, et l'idV $idV
function insertJouer($connexion, $idLec, $idV)
{
    $requete="INSERT INTO JOUER VALUES($idLec, $idV);";
    $prepare=mysqli_prepare($connexion,$requete);
    $res = mysqli_stmt_execute($prepare);
    return $res;
}

//insert dans la BD dans la Table INCLURE avec l'id de la playlist $idLec, et l'id de l'album $idA, le numéro de piste $numéro_piste
function insertInclure($connexion, $idLec, $idA, $numero_piste)
{
    $requete="INSERT INTO INCLURE VALUES($idLec, $idA, $numero_piste);";
    $prepare=mysqli_prepare($connexion,$requete);
    $res = mysqli_stmt_execute($prepare);
    return $res;
}




//-=-=-=-=-=-=-=-=-=-=-=-=-=-=DEBUT FONCTION NOM ALEATOIRE
//récupère un nom au hasard de groupe dans la BD, $sep est le séparateur de la table en l'occurance " " ici
function nom_aléatoire_GRP($connexion, $sep) {
    $requete ="SELECT nomG FROM GROUPE ORDER BY RAND() LIMIT 1 ";
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère la seul valeur du tableau SQL (LIMIT 1)
    {
        $res=$row["nomG"]; //insère la valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'nomG' pour pouvoir y accéder
        $nom=explode($sep, $res);//usage de la fonction explode qui prend en paramètre un séparateur $sep, et un nom à séparer
    }
    $max = count($nom)-1;
    $nom1=$nom[rand( 0, $max)];// renvoi un mot au hasard parmi la chaîne
    return $nom1; //renvoie la première partie du nom du groupe (tout ce qui est avant " ")
}

//récupère un nom de genre au hasard dans la BD, $sep est le séparateur de la table en l'occurance "; " ici
function nom_aléatoire_GENRE($connexion, $sep) {
    $requete ="SELECT nom_genre FROM GENRE ORDER BY RAND() LIMIT 1 ";
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère la seul valeur du tableau SQL (LIMIT 1)
    {
        $res=$row["nom_genre"];//insère la valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'nom_genre' pour pouvoir y accéder
        $nom=explode($sep, $res);//usage de la fonction explode qui prend en paramètre un séparateur $sep, et un nom à séparer
    }
    $max = count($nom)-1;
    $nom1=$nom[rand( 0, $max)];// renvoi un mot au hasard parmi la chaîne
    return $nom1; //renvoie la première partie du nom du genre (tout ce qui est avant "; ")
}

//récupère un nom de chanson au hasard dans la BD, $sep est le séparateur de la table en l'occurance " " ici
function nom_aléatoire_SONG($connexion, $sep) {
    $requete ="SELECT titreC FROM CHANSON ORDER BY RAND() LIMIT 1 ";
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère la seul valeur du tableau SQL (LIMIT 1)
    {
        $res=$row["titreC"];//insère la valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'titreC' pour pouvoir y accéder
        $nom=explode($sep, $res);//usage de la fonction explode qui prend en paramètre un séparateur $sep, et un nom à séparer
    }
    $max = count($nom)-1;
    $nom1=$nom[rand( 0, $max)];// renvoi un mot au hasard parmi la chaîne
    return $nom1;//renvoie le nom
}

// on Tire au hasard Parmi Les Genres, Groupes et Chansons.
function nom_aléatoire_choix($connexion)//précondition : Aucune, les tables Groupe, Genre et Chanson ne sont pas vides cependant.
{
	$nombre = rand(0,2);
	switch($nombre){
		case 0:
	        $nom = nom_aléatoire_GRP($connexion, " ");
	    break;

		case 1:
            $nom = nom_aléatoire_GENRE($connexion, "; ");
        break;

		case 2:
            $nom = nom_aléatoire_SONG($connexion, " ");
        break;
	}

	return $nom;
}//post-condition : retourne une chaîne de carractères ( un mot )

function nom_aléatoire($connexion, $longueur)//précondition : $longueur > 0  FONCTION A APPELER
{
	for($i=0; $i<$longueur; $i++)
	{
		$mot = nom_aléatoire_choix($connexion);
		$mot_final = $mot_final." ".$mot;
	}
	return $mot_final;
}//post-condition : retourne une chaîne de carractères ( une phrase )
//=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=FIN FONCTION NOM_ALEATOIRE


//récupère l'id de la PLaylist selon son nom, $nom (permet aussi de vérifier si la playlist existe)
function get_id_By_NomPlaylist($connexion, $nom){
    $requete = "SELECT idLec FROM LISTE_DE_LECTURE WHERE titreLec LIKE "."\"$nom\"".";"; //cette fusion de guillemets de concatenage et de backslash permet à la valeur de contenir des guillemets, des apostrophes...
    $prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère la seul valeur du tableau SQL
    {
        $res=$row['idLec'];//insère la valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'idLec' pour pouvoir y accéder
    }
    return $res;//renvoie le tableau $res
}


function compte_chanson_groupe($connexion) {
    $requete ="SELECT g.idG, b.nomG, COUNT(g.idG) AS value_occurrence FROM INTERPRÉTERg natural Left join GROUPEb 
				GROUP BY idG ORDER BY value_occurrence DESC LIMIT 5 ;";
    $res = mysqli_query($connexion, $requete);
    $resultat = mysqli_fetch_all($res, MYSQLI_ASSOC);
    return $resultat;
}

//=============================================
//récupération de tous les idV associés à une Chanson
function get_idV_inter($connexion, $titreC)
{
	$requete = "SELECT DISTINCT idV FROM `CHANSON` NATURAL JOIN `INTERPRÉTER` 
				NATURAL JOIN `VERSION` WHERE titreC LIKE \"".$titreC."\" ;";
	$prepare = mysqli_query($connexion, $requete);
    while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['idV']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'idV' pour pouvoir y accéder
    }
    return $res;
}
function get_idV_pro($connexion, $titreC)
{
	$requete = "SELECT DISTINCT idV FROM `CHANSON` NATURAL JOIN `PRODUIRE` 
				NATURAL JOIN `VERSION` WHERE titreC LIKE \"".$titreC."\" ;";
	while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['idV']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'idV' pour pouvoir y accéder
    }
    return $res;
}
//Récupération de l'idV correspondant à la chanson sélectionnée
function get_idV_from($connexion ,$titreLec)//nomChanson en parametres
{
	$requete = "SELECT idV FROM `LISTE_DE_LECTURE` NATURAL JOIN `JOUER` 
				NATURAL JOIN `VERSION` WHERE idLec = \"".$titreLec."\" ;";
	while($row=mysqli_fetch_assoc($prepare))//récupère toutes les valeurs du tableau SQL
    {
        $res = $row['idV']; //insère les valeur du tableau SQL dans un tableau php nommé $res avec comme nom de colomne 'idV' pour pouvoir y accéder
    }
    return $res;
}
function idV_common($connexion) // retourne l'idV désiré
{
	if(NULL == get_idV_inter($connexion, $titreC))
	{ $idV = get_idV_pro($connexion, $titreC); }
	else { $idV = get_idV_inter($connexion, $titreC);}
	$TabLec = get_idV_from($connexion ,$titreLec);
	$res="";
    for($i=0; $d<count($idV); $i++){
        if(in_array($idV[$i],$TabLec)){
           $res=$res." ".$idV[$i] ;
        }
    }
   $res = explode(" ",$res);
   return $res;
}
//===============================================
//supression d'une VERSION de Chanson dans une playlist
function delete_chanson_from_playlist($connexion, $idV, $idLec) {
    $requete = "DELETE FROM JOUER WHERE idLec = $idLec AND idV = $idV;";
    $res = mysqli_query($connexion, $requete);
    mysqli_commit($connexion);
    return $res;
}

//===============================================
//supression d'une VERSION de Chanson dans une playlist
function add_chanson_to_playlist($connexion, $idV, $idLec) {
    $requete = "INSERT INTO JOUER VALUES($idLec, $idV);";
    $res = mysqli_query($connexion, $requete);
    mysqli_commit($connexion);
    return $res;
}

//===============================================
//SI la playlist n'a plus de chanson :
function playlist_vide($connexion, $idLec)
{
	$requete ="SELECT  FROM JOUER 
			   WHERE idLec = '.$idLec.'; ";
    $res = mysqli_query($connexion, $requete);
    return $res;
}
// LA playlist est vide : on la supprime
function régulariser_playlist($connexion, $idLec) // fonction à appeler
{	if( playlist_vide($connexion, $idLec) == NULL )
	{
		$requete ="DELETE * FROM `LISTE_DE_LECTURE` 
			   WHERE idLec = '.$idLec.'; ";
		$res = mysqli_query($connexion, $requete);
		return $res;
	}
}
// ==SUPRESSION D'UNE PLAYLIST ENTIERE============================
//fonction principale à appeler :
function supprimer_playlist($connexion, $idLec, $idC) // fonction à appeler
{
	$requete ="DELETE  FROM `JOUER` 
			   WHERE idLec = '.$idLec.';";
	$res = mysqli_query($connexion, $requete);
	return $res;
}

// ==========SUPRESSION D'UNE CHANSON============================
//fonction principale à appeler :
function supprimer_chanson($connexion, $idC) // fonction à appeler
{
	$requete ="DELETE  FROM `LISTE_DE_LECTURE` 
			   WHERE idC = '.$idC.'; 
			   DELETE  FROM `JOUER` 
			   WHERE idC = '.$idC.';";
	$res = mysqli_query($connexion, $requete);
	return $res;
}

//============== Nombre de chansons d'une Playlist ==========
// fonction à appeler :
function compte_chanson_playlist($connexion, $titreLec) {
    $requete ="SELECT COUNT(v.idV) AS value_occurrence FROM LISTE_DE_LECTURE l NATURAL JOIN JOUER j NATURAL JOIN VERSION v 
			   WHERE l.titreLec LIKE ".$titreLec." ;";
    $res = mysqli_query($connexion, $requete);
    return $res;
}
//===== Nombre de genres voulus dans une Playlist =====
// fonction à appeler :
function compte_genre_playlist($connexion, $titreLec, $nom_genre) {
    $requete ="SELECT COUNT(g.nom_genre) AS value_occurrence FROM LISTE_DE_LECTURE l NATURAL JOIN JOUER NATURAL JOIN VERSION 
			   NATURAL JOIN INTERPRÉTER NATURAL JOIN CHANSON NATURAL JOIN POSSÉDER NATURAL JOIN GENRE g
			   WHERE l.titreLec LIKE '$titreLec' 
			   AND g.nom_genre LIKE %$nom_genre% ;";
    $res = mysqli_query($connexion, $requete);
    return $res;

}
//=================CALCUl DU SCORE DE RESSEMBLANCE DE PLAYLISTS=========================

function get_similitude_durees($durée1, $durée2) // nombre entre 0 et 100
{
    if($durée1<$durée2)
    {
        $simili = round(($durée1/$durée2)*100, 2);
    }else{
        $simili = round(($durée2/$durée1)*100, 2);
    }

	return $simili;
}

function get_similitude_titres($connexion, $Tab_titre1, $nb1, $Tab_titre2, $nb2) // nombre entre 0 et 100
{
    $valeur = 0;

    for($a=0; $a<$nb1; $a++){
        $Tab=search_nom_genre($connexion, $Tab_titre1[$a]);
    }
    
    for($b=0; $b<$nb2; $b++){
        $Tab2=search_nom_genre($connexion, $Tab_titre2[$b]);
    }

    for($d=0; $d<count($Tab2); $d++){
        if(in_array($Tab2[$d],$Tab)){
            $valeur++;
        }
    }

    for($c=0; $c<count($Tab); $c++){
        if(in_array($Tab[$c],$Tab2)){
            $valeur++;
        }
    }

    return round(($valeur/(count($Tab2)+count($Tab))*100), 2);
}

function get_musique_commun($connexion, $Tab_titre1, $nb1, $Tab_titre2, $nb2)// nombre entre 0 et n (nombre de musique en commun)
{
    $valeur=0;
    for($i=0; $i<$nb1; $i++){
        for($j=0; $j<$nb2; $j++){
            if($Tab_titre1[$i] == $Tab_titre2[$j]){
                $valeur++;
            }
        }
    }
	return $valeur;
}

function get_musique_récente($connexion, $Tab_Jouer, $nb2 ,$Tab_Jouer2, $nb3){
    $valeur=0;
    for($i=0; $i<$nb2; $i++){
        if($Tab_Jouer[$i]<1000){
            $valeur++;
        }
    }
    
    for($j=0; $j<$nb3; $j++){
        if($Tab_Jouer2[$j]<1000){
            $valeur++;
        }
    }

    return $valeur;
}

function get_score_final($titre_pourcen, $durée_pourcen, $commun, $distinct, $récent, $nb2, $nb3)// nombre entre 0 et  100 (pourcentage )
{
    $final = 0;
    $somme = $nb2+$nb3;
    $demi_somme = intval($somme/2);
    if($commun == 0){
        if($distinct == 0){
            $final = (($titre_pourcen+$durée_pourcen)/3);
        }elseif($distinct < $demi_somme){
            $final = (($titre_pourcen+$durée_pourcen)/3.2);
        }elseif($distinct > $demi_somme){
            $final = (($titre_pourcen+$durée_pourcen)/3.5);
        }
    }elseif($commun < $demi_somme){
        if($distinct == 0){
            $final = (($titre_pourcen+$durée_pourcen)/2);
        }elseif($distinct < $demi_somme){
            $final = (($titre_pourcen+$durée_pourcen)/2.5);
        }elseif($distinct > $demi_somme){
            $final = (($titre_pourcen+$durée_pourcen)/2.7);
        }
    }elseif($commun >= $demi_somme){
        if($distinct == 0){
            $final = (($titre_pourcen+$durée_pourcen)/2);
        }elseif($distinct < $demi_somme){
            $final = (($titre_pourcen+$durée_pourcen)/2.3);
        }elseif($distinct > $demi_somme){
            $final = (($titre_pourcen+$durée_pourcen)/2.5);
        }
    }
	return round($final, 2);
}


//<>===================<><>( FONCTIONS REUTILISABLES )<><>=========================<>

// selection un élément d'une table passé en paramètre
function SELECT_E_WHERE_LIKE($connexion, $table, $element, $param1, $param2 ){

    $requete = 'SELECT '.$element.' FROM '.$table.' WHERE '.$param1.' LIKE "'.$param2.'";';
    $res = mysqli_query($connexion, $requete);
    return $res;
}

// selection un élément d'une table passé en paramètre
function SELECT_E_WHERE_EQUAL($connexion, $table, $element, $param1, $param2 ){

    $requete = 'SELECT '.$element.' FROM '.$table.' WHERE '.$param1.' = '.$param2.' ;';
    $res = mysqli_query($connexion, $requete);
    return $res;
}

// fonction pour obtenir les n plus grandes/petites valeurs
function max_limit($connexion, $table, $param_OUT, $param_IN, $limite, $ordre){

    $requete = 'SELECT '.$param_OUT.' FROM '.$table.' ORDER BY '.$param_IN.' '.$ordre.' LIMIT '.$limite.' ;';
    $res = mysqli_query($connexion, $requete);
    $instances = mysqli_fetch_all($res, MYSQLI_ASSOC);
    return $instances;
}

//supprime une ligne d'une table
function delete_ligne($connexion, $idtransmis, $ntable, $idtable) {
    $requete = "DELETE FROM $ntable WHERE $idtable = $idtransmis;";
    $res = mysqli_query($connexion, $requete);
    mysqli_commit($connexion);
    return $res;
}
		// NE PAS DEPLACER ( ON LAISSE EN BAS )
//<>=======================---------------------------==============================<>
?>
