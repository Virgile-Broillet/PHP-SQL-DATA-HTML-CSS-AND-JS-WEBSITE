<?php 
$connexion = getConnexionBD(); // connexion à la BD

$chanson = getInstances($connexion, "CHANSON");
if($chanson == null || count($chanson) == 0) {
	$message .= "Aucune Chansons n'a été trouvée dans la base de données !";
}

if(isset($_POST['boutonValider'])) {
	
	$nomChanson	= mysqli_real_escape_string($connexion, $_POST['champRech']);
	$titreC = search_titreC($connexion, $nomChanson);
	$dateC = search_dateC($connexion, $nomChanson);
	$typeC = search_typeC($connexion, $nomChanson);
	$nomG = search_nomG($connexion, $nomChanson);
	$nomA = search_nomA($connexion, $nomChanson);
	if(count($resultats) == 0) {
		$message = "Aucun résultat pour cette valeur !";
	}
}
?>
