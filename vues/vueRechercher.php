<?php error_reporting(0); ?>

<?php if(isset($message)) { ?>
	<p style="background-color: yellow;"><?= $message ?></p>
<?php } ?>

<style>
h2{
	width:25em;
}
</style>

<center>

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

<article>
    <?php if(isset($message)) { ?>
        <p style="background-color: yellow;"><?= $message ?></p>
    <?php } ?>
    <?php if(isset($resultats)) { ?>
        <ul>
        <?php
            foreach($resultats as $instance) {  // nombre d'attributs variable dans les résultats (selon la table)
                echo '<li>';
            }
        ?>
</article>


