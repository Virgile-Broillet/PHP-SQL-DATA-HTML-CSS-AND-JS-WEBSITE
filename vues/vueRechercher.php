<?php error_reporting(0); ?>

<style>
h2{
	width:25em;
}
</style>

<center>

	<article>
		<?php if(isset($titreC)) { ?>
			<table>
				<tr>
				<th> Nom de La Chasnon </th>
				<th> Date de Sortie de La Chanson </th>
				<th> Type de Chanson </th>
				<th> Nom du Groupe </th>
				<th> Nom de l'Album </th>
				</tr>

				<tr>
					<td><?= $titreC ?></td>
					<td><?= $dateC ?> </td>
					<td><?= $typeC ?> </td>
					<td><?= $nomG ?> </td>
					<td><?= $nomA ?> </td>
				</tr>
			</table>
		<?php } ?>
	</article>

	<div class="formulaire">
		<h2>Rechercher Les informations d'Une Chanson</h2>
		</br>
		<form method="post" action="#">	
			<select name="champRech" id="idChamp">
				<?php foreach($chanson as $chanson) { ?>
							<option><?= $chanson['titreC'] ?></option>
				<?php } ?>
			</select>

			</br></br></br>

			<div class="button"><input type="submit" name="boutonValider" value="Rechercher"/></div>
		</form>
	</div>
</center>
