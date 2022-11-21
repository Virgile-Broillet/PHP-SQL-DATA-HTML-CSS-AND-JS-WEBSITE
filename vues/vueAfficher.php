<?php if(isset($message)) { ?>
	<p style="background-color: yellow;"><?= $message ?></p>
<?php } ?>

<?php error_reporting(0); ?>

<table>
	<h2>Liste des Groupes :</h2>
	<tr>
		<th> Identifiant :</th>
		<th> Nom du Groupe :</th>
	</tr>
		
<?php foreach($groupe as $groupe) { ?>
   <tr>
	<td><?= $groupe['idG'] ?></td>
	<td><?= $groupe['nomG'] ?> </td>
	
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

