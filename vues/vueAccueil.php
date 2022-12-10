
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
	
		
    </br><!-- ON AFFICHE LE COMPTEUR ICI -->
		<div id="compteur">
		<center>
			<?php include('static/encart.php'); ?>
		</center>
		</div>

</br>	<!-- TEXTE D'EXPLICATION DES DEMARCHES -->
		
			<h5> Les objectifs de notre Site "<?= $nomSite ?>" : </h5>
		
	<div class="ACCUEIL">
		<table>	
		<tr>
		<td>
			<li> PREMIERE FONCTIONALITE </li></br>
			 Nous Avons réalisé un affichage avec un formulaire permettant d'insérer des chansons
				  directement dans la Base de données. Notre formulaire s'auto-actualise et contient
				  des paramètres pré-remplis, afin d'être facile d'utilisation. 				
			</br>Notre formulaire est protégé contre les injections SQL, afin de protéger les données.
			</br>Essayez pour voir . . .
			</br> </br> 
		</td>
		<td>
			</br>
			<li> DEUXIEME FONCTIONALITE </li></br>
			 Pour l'importation du jeu de données, nous avons des fonctions remplissant la Base de Données automatiquement depuis le modèle.
			 Un maximum de tables ont été importées.
			 Le diagramme E/A nous a permi de mieux organiser le remplissage des tables. Toutes ne sont pas remplies malheureusement par manque de
			 contenu dans le dataset songs2000. Nous avons fait de notre mieux !
			</br> </br> 
		</td> 
		<td>
			<li> TROIXIEME FONCTIONALITE </li></br>
			La création d'une Playlist Aléatoire selon une durée voulue et un genre de préférence 
				  Est rendue possible même si l'utilisateur n'a pas d'inspiration pour le nom de Playlist.
				  Vous ne nous croyez-pas ? Regardez ces magnifiques titres de Playlist !
			</br> "<?= nom_aléatoire_GRP($connexion, " ");?> <?= nom_aléatoire_GENRE($connexion, "; ");?> <?= nom_aléatoire_SONG($connexion, " ");?>" ou encore "<?= nom_aléatoire_GRP($connexion, " ");?> <?= nom_aléatoire_GENRE($connexion, "; ");?> <?= nom_aléatoire_SONG($connexion, " ");?>" sympa n'est-ce pas ?
			</br></br>
		</td>
		<td>
			</br>
			<li> QUATRIEME FONCTIONALITE </li></br>
			  La Gestion des Listes de Lectures Permet en tout d'afficher, comparer, modifier et ajouter
				  des Playlists et leur Contenu. 
				  Nous avons aussi penser à supprimer les playlists dont le contenu a été totalement éffacé. 
				  Le plus amusant c'est de pouvoir comparer les playlists entre elles et de comparer leur degré de similitude ! 
				  je pense que si on compare une playlist avec elle-même, le score serait de 100 %. 
				  Ca vaut le coup de vérifier !
		</td>
		</tr>
		</table>
	</div>
		

	
</center>
</main>
