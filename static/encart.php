<head>
    <meta charset="utf-8" />
    <link href="css/style.css" rel="stylesheet" media="all" type="text/css">
</head>

<style>
	h2{
		width:15em;
	}

	h5{
		width:auto;
	}

	.gauche{
		width:35%;
		margin-left:4em;
	}

	.droite{
		text-align:initial;
		width:35%;
		margin-left:4em;
	}
</style>


<div class="texte-complet">
	<div class="menu-compteur">
		<center>
			<h2>Compteur du Site :</h2> </br>
			<div class="gauche"><h5>Nombre de chansons :  <?=  countInstances($connexion, 'CHANSON') ?></h5></div>
			<div class="droite"><h5>Nombre de groupes :  <?=  countInstances($connexion, 'GROUPE') ?> </h5></div>
			</br></br>
			<h5>Genres disponibles:  </h5>
			<?=countInstances_genre($connexion)?> genres
			</br></br>
			
			<h5>Chansons avec le meilleur Playcount:  </h5>
			
			<?php  $tab = max_playcount($connexion);?>
			<?= $tab[0] ?> avec 
			<?= $tab[1] ?> écoutes

			</br></br>

			<?php $nb=last_played($connexion);?>
			<h5>Nombre de Chansons avec un Lastplayed NULL :  <?=  $nb ?></h5>

			<h4> </h4>
			<h5>Chansons avec le plus grand Lastplayed:  </h5>
			<table>
				<?php  $tab = max_last_played($connexion); ?>
				<?= $tab[0] ?>, non écouté depuis 
				<?= intval($tab[1]/1000) ?> secondes soit <?= intval(intval($tab[1]/1000)/60)+1 ?> minutes arrondie
			
			</table>
					
			<h5>Chansons avec le plus grand skipcount:  </h5>
			<table>
				<?php  $tab = max_skip_count($connexion); ?>
				<?= $tab[0] ?> passée 
				<?= $tab[1] ?> fois
			</table>		
					
			<h5>Groupes avec le plus de chansons:  </h5>
			<table>
				<?php $tab = max_song_group($connexion); ?>
				<?= $tab[1] ?> avec 
				<?= $tab[0] ?> musiques dans la Base de Données
			</table>
		</center>
	</div>
</div>




