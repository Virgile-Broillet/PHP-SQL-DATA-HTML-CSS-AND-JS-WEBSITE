<?php if(isset($message)) { ?>
	<p style="background-color: yellow;"><?= $message ?></p>
<?php } ?>

<?php error_reporting(0); ?>


<h2>Liste des Groupes :</h2>
<ul>
<?php foreach($groupe as $groupe) { ?>
	<li><?= $groupe['nomG'] ?></li>
<?php } ?>
</ul>

<h2>Liste des Genres :</h2>
<ul>
<?php foreach($genre as $genre) { ?>
	<li><?= $genre['nom_genre'] ?></li>
<?php } ?>
</ul>

