<head>
    <meta charset="utf-8" />
    <link href="css/style.css" rel="stylesheet" media="all" type="text/css">
</head>


<div class="texte-complet">
	<div class="menu-compteur">
		<h4>Compteur du Site :</h4> </br>
		<h5>Nombre de chansons : <?= countInstances($connexion, 'CHANSON') ?></h5>
		<h5>Nombre de groupes : <?= countInstances($connexion, 'GROUPE') ?> </h5>
	</div>
</div>

