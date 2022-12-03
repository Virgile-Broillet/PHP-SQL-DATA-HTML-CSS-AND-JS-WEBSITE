<?php if(isset($message)) { ?>
	<p style="background-color: yellow;"><?= $message ?></p>
<?php } ?>

<?php error_reporting(0); ?>
<center>
<h2>Liste des Chansons - Versions les plus récemment ajoutées :</h2>
	<table>
		<tr>
		 <th> idC </th>
		 <th> Titre de la Chanson </th>
		 <th> nom du Groupe </th>
		 <th> Date de la Version </th>
		 <th> Skip-count du titre </th>
		 <th> Last-played </th>
		 <th> Nombres d'écoutes </th>
		</tr>

		<?php foreach($CHANSONS_interpretees as $song) { ?>
		<tr>
			<td><?= $song['idC'] ?></td>
			<td><?= $song['titreC'] ?></td>
			<td><?= $song['nomG'] ?> </td>
			<td><?= $song['DateV'] ?> </td>
			<td><?= $song['Durée'] ?> </td>
			<td><?= $song['playcount'] ?> </td>
			<td><?= $song['skipcount'] ?> </td>
		</tr>
		<?php } ?>


<table>
	<h2>Liste des Groupes :</h2>
	<tr>
		<th> Identifiant :</th>
		<th> Nom du Groupe :</th>
		<th> Nom de Scène des Musiciens : </th>
	</tr>
		
<?php foreach($groupe as $groupe) { 
	$membre = get_info_member($connexion, $groupe['idG']);?>
   <tr>
	<td><?= $groupe['idG'] ?></td>
	<td><?= $groupe['nomG'] ?> </td>
	<td> /
		<?php 
		foreach($membre as $mbr){ ?>
		<?= $mbr['nom_de_scène'] ?> /
		<?php } ?>
	</td>
   </tr>
<?php } ?>
</table>

<h2>Liste des Genres :</h2>
<table>
<?php foreach($genre as $genre) { ?>
	 <tr>
	<td><?= $genre['idGE'] ?></td>
	<?php 
	$mot = explode("; ", $genre['nom_genre']);
	foreach($mot as $mot) {
	?>
	<td><?= $mot?></td>
	<?php } ?>
	 </tr>
<?php } ?>
</table>
</center>
