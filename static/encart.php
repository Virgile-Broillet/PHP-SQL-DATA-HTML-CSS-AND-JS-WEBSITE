<head>
    <meta charset="utf-8" />
    <link href="css/style.css" rel="stylesheet" media="all" type="text/css">
</head>

<style>

.texte-complet {
	width: 22.6em;
	height: auto;
	background: #e6e6e6;
	border-radius: 8px;
	box-shadow: 0 0 40px -10px #000;
	margin: 0.5em;
	padding: 20px 30px;
	box-sizing: border-box;
	font-family: "Montserrat", sans-serif;
	position: relative;
}

.menu-compteur {
	text-align: center;
}

h4 {
	margin: 10px 0;
	padding-bottom: 5px;
	width: 300px;
	color: #78788c;
	border-bottom: 3px solid #78788c;
	font-size: 1em;
}

h5 {
	margin: 10px 0;
	padding-bottom: 5px;
	width: 300px;
	color: black;
	font-size: 1em;
}

</style>

<div class="texte-complet">
	<div class="menu-compteur">
		<h4>Compteur du Site :</h4> </br>
		<h5>Nombre de chansons : <?= countInstances($connexion, 'CHANSON') ?></h5>
		<h5>Nombre de groupes : <?= countInstances($connexion, 'GROUPE') ?> </h5>
	</div>
</div>

