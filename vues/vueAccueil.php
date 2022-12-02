
<head>
    <meta charset="utf-8" />
    <link href="css/style.css" rel="stylesheet" media="all" type="text/css">
</head>

<main>
	<center><h3>Les Meilleurs de vos Souvenirs Remixés</h3>
		<div id="wrapper">
			<div id="carousel">
				<div id="content">
					<a href="https://youtu.be/4VxdufqB9zg" target="_blank">
						<img
							class="item"
							src="img/groupe1.jpg"
						/>
					</a>
					<a href="https://youtu.be/VtXl8xAPAtA" target="_blank">
						<img
							src="img/groupe2.jpg"
							class="item"
						/>
					</a>
					<a href="https://youtu.be/_N2XLteXBoY" target="_blank">
						<img
							src="img/groupe3.png"
							class="item"
						/>
					</a>
					<a href="https://youtu.be/rXF1Si3LEEU?list=OLAK5uy_lbcsh_E-SKtipIUmpO7VDDdN2Ww3DMzGQ" target="_blank">
						<img
							src="img/groupe4.jpg"
							class="item"
						/>
					</a>
					<a href="https://youtu.be/fJ9rUzIMcZQ" target="_blank">
						<img
							src="img/groupe5.jpg"
							class="item"
						/>
					</a>
					<a href="https://youtu.be/1TTAXENxbM0?list=OLAK5uy_n6SBFCyrA2XKrQ_V3-xK9MBZb62b-l92c" target="_blank">
						<img
							class="item"
							src="img/groupe6jpg.jpg"
						/>
					</a>
					<a href="https://youtu.be/v2AC41dglnM" target="_blank">
						<img
							src="img/groupe7.jpg"
							class="item"
						/>
					</a>
					<a href="https://youtu.be/1w7OgIMMRc4" target="_blank">
						<img
							src="img/groupe8.jpg"
							class="item"
						/>
					</a>
					<a href="https://youtu.be/jsJVmiqf8VA" target="_blank">
						<img
							src="img/groupe9.jpg"
							class="item"
						/>
					</a>
					<a href="https://youtu.be/yxsOwJQ9Lbc" target="_blank">
						<img
							src="img/groupe10.jpg"
							class="item"
						/>	
					</a>
					<a href="https://youtu.be/34CZjsEI1yU" target="_blank">
						<img
							class="item"
							src="img/groupe11.jpg"
						/>
					</a>
					<a href="https://youtu.be/gXzMD065HEk" target="_blank">
						<img
							src="img/groupe12.jpg"
							class="item"
						/>
					</a>
					<a href="https://youtu.be/XEEasR7hVhA" target="_blank">
						<img
							src="img/groupe13.jpg"
							class="item"
						/>
					</a>
					<a href="https://youtu.be/jhK2ev_O-pc" target="_blank">
						<img
							src="img/groupe14.jpg"
							class="item"
						/>
					</a>
					<a href="https://youtu.be/2RohHZbQ5po" target="_blank">
						<img
							src="img/groupe15.jpg"
							class="item"
						/>
					</a>
				</div>
				
				<button id="prev">
					<svg
					xmlns="http://www.w3.org/2000/svg"
					width="24"
					height="24"
					viewBox="0 0 24 24"
					>
					<path fill="none" d="M0 0h24v24H0V0z" />
					<path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
					</svg>
				</button>
					
				<button id="next">
					<svg
					xmlns="http://www.w3.org/2000/svg"
					width="24"
					height="24"
					viewBox="0 0 24 24"
					>
					<path fill="none" d="M0 0h24v24H0V0z" />
					<path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
					</svg>
				</button>
			</div>
		</div>

		<script src="css/carousel.js"></script>

</br></br>	<!-- TEXTE D'EXPLICATION DES DEMARCHES -->
		<center>
			<h5> Les objectifs de notre Site "Playlist Watcher" : </h5>
		</center>
	<h4><ul>
		<li> PREMIERE FONCTIONALITE </li>
		 <ul> Nous Avons réalisé un affichage avec un formulaire permettant d'insérer des chansons</br>
			  directement dans la Base de données. Notre formulaire s'auto-actualise et contient </br>
			  des paramètres pré-remplis, afin d'être facile d'utilisation. 					</ul>
	     <ul> Notre formulaire est protégé contre les injections SQL, afin de protéger les données.</br>
	          </ul>
		<li> DEUXIEME FONCTIONALITE </li>
		 <ul> Pour l'importation du jeu de données ...
		 </ul>
		<li> TROIXIEME FONCTIONALITE </li>
		 <ul> La création d'une Playlist Aléatoire selon une durée voulue et un genre de préférence </br>
		      Est rendue possible même si l'utilisateur n'a pas d'inspiration pour le nom de Playlist.</br>
		      Vous ne nous croyez-pas ? écoutons ce que la Base de Données a à nous dire !  </ul>
		 <ul> "Bonjour, Je suis La Base de Données, en ce moment je pense  <?echo nom_aléatoire(2);?> </br>
		       Aussi, je crois que <?echo nom_aléatoire(9);?>
		       C'est pourquoi <?echo nom_aléatoire(6);?> HEHEHE ! <?echo nom_aléatoire(4);?> " </ul>
		<li> QUATRIEME FONCTIONALITE </li>
		 <ul> La Gestion des Listes de Lectures Permet en tout D'afficher, comparer, modifier et ajouter</br>
		      Des Playlists et leur Contenu. Nous avons aussi penser à supprimer les playlists dont le </br>
		      contenu a été totalement éffacé.
		 </ul>
	</ul></h4>
		
</br></br>

		<div id="compteur">
			<?php include('static/encart.php'); ?>
		</div>


	</center>
</main>
