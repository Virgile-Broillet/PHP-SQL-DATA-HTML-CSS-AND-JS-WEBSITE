<?php

/*
** Il est possible d'automatiser le routing, notamment en cherchant directement le fichier controleur et le fichier vue.
** ex, pour page=afficher : verification de l'existence des fichiers controleurs/controleurAfficher.php et vues/vueAfficher.php
** Cela impose un nommage strict des fichiers.
*/

$routes = array(
	'afficher' => array('controleur' => 'controleurAfficher', 'vue' => 'vueAfficher'),
	'ajouter' => array('controleur' => 'controleurAjouter', 'vue' => 'vueAjouter'),
	'gerer' => array('controleur' => 'controleurGerer', 'vue' => 'vueGerer'),
	'rechercher' => array('controleur' => 'controleurRechercher', 'vue' => 'vueRechercher'),
	'remerciements' => array('controleur' => 'controleurRemerciements', 'vue' => 'vueRemerciements'),
    'playlist' => array('controleur' => 'controleurPlaylist', 'vue' => 'vuePlaylist'),
	'gifs' => array('controleur' => 'controleurGif', 'vue' => 'vueGif'),
	'contacts' => array('controleur' => 'controleurContact', 'vue' => 'vueContact')
);

?>
