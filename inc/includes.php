<?php

include '../modele/modele.php';

$nomSite = "Nuggets Musique";
$nbr = rand(0,10); // ici on va générer une Baseline aléatoire
$date = date("Y-m-d");

switch($nbr){
	case 0:
		$baseline = "Réalisé par Virgile Broillet p2103804 et Louis Roussange p1904941";
	break;

	case 2:
		$baseline = "Réalisé par Louis Roussange p1904941 et Virgile Broillet p2103804";
	break;

	case 3:
		$baseline = "Une Nuggets vaux mieux que Deux Spaghettis - ".nom_aléatoire($connexion, 1)." ".nom_aléatoire_GRP($connexion, " ");
	break;

	case 4:
		$baseline = "La Base de Données a dit : ".nom_aléatoire($connexion, 6);
	break;

	case 5:
		$baseline = "Le ".nom_aléatoire_GENRE($connexion, "; ")." est le genre préféré de La Base de Données";
	break;

	case 6:
		$baseline = nom_aléatoire($connexion, 3)." Devrait faire partie du groupe ".nom_aléatoire_GRP($connexion, " ")."";
	break;

	case 7:
		$baseline = "Conaissez-vous ".nom_aléatoire($connexion, 5)." ?";
	break;

	case 8:
		$baseline = "Ma chanson préférée c'est ".nom_aléatoire_SONG($connexion, " ")." ".nom_aléatoire_SONG($connexion, " ");
	break;

	case 9:
		$baseline = "Le Sage mets la charue pour faire de deux coups une pierre.";
	break;
		// cas numéro 10 :
	default:
		$baseline = "Aujourd'hui, nous somme le : ".$date;
}
?>
