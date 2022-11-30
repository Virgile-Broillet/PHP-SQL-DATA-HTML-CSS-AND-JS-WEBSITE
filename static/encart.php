<head>
    <meta charset="utf-8" />
    <link href="css/style.css" rel="stylesheet" media="all" type="text/css">
</head>


<div class="texte-complet">
	<div class="menu-compteur">
		<h4>Compteur du Site :</h4> </br>
		<h5>Nombre de chansons : <?= countInstances($connexion, 'CHANSON') ?></h5>
		<h5>Nombre de groupes : <?= countInstances($connexion, 'GROUPE') ?> </h5>
		
		<h5>Chansons avec le meilleur Playcount:  </h5>
		
			<?php  $tab = max_playcount($connexion, 5); ?>
			<?php foreach($tab as $table) { ?>
				
					<?echo $table['titreC'] ?>
					<?= $table['playcount'] ?>
				
				<?php } ?>
		

		<h5>Nombre de Chansons avec un Lastplayed NULL : </h5>
		<h4><? = last_played_Louis($connexion); ?></h4>
			
		<h5>Chansons avec le plus grand Lastplayed:  </h5>
		<table>
			<?php  $tab = last_played($connexion, 5); ?>
			<?php foreach($tab as $table) { ?>
				<tr>
					<td><?= $table['titreC'] ?></td>
					<td><?= $table['lastplayed'] ?></td>
				</tr>
				<?php } ?>
		
		</table>
				
		<h5>Chansons avec le plus grand skipcount:  </h5>
		<table>
			<?php  $tab3 = Virgile_Skip_count($connexion, "desc", 5); ?>
			<?php foreach($tab3 as $table3) { ?>
				<tr>
					<td><?= $table3['titreC'] ?></td>
					<td><?= $table3['lastplayed'] ?></td>
				</tr>
				<?php } ?>
		</table>		
				
		<h5>Groupes avec le + de chansons:  </h5>
	</div>
</div>




