 <?php
	include('function.php');
	$connect = connexion('172.16.205.114', '110', 's1am');

	if ($connect) {
		echo "Vous êtes bien connecté";
	}

	if (isset($_POST['Insertion'])) {
		// Insertion logic here
	}
	?>

		<form action="function.php" method="POST">
			<fieldset>
				<legend>Insertions</legend>
				<label for="nom">Nom:</label>
				<input type="text" name="nom" value="" /><br/><br/>
				<label for="prenom">Prénom:</label>
				<input type="text" name="prenom" value="" /><br/><br/>
				<label for="login">Login:</label>
				<input type="text" name="login" value="" /><br/><br/>
				<label for="motDePasse">Mot de passe:</label>
				<input type="password" name="motDePasse" value="" /><br/><br/>
				<input type="submit" name="Insertion" value="Identification" />
			</fieldset>
		</form>

		<?php


		</p>
		</fieldset>
		</form>

	<?php
	if(isset($_GET['Modification'])) {
	?>
		<form action="function.php" method="POST">
			<label for="login">Ancien login :</label>
			<input type="text" name="ancienlogin" value="" /><br/><br/>
			<label for="login">Login :</label>
			<input type="text" name="login" value="" /><br/><br/>
			<input type="submit" name="BModification" value="Modification" />
		</form>
		<?php
		}

			if(isset($_GET['Suppression'])) {
		?>
		<form action="function.php" method="POST">
			<label for="login">Login :</label>
			<input type="text" name="login" value="" /><br/><br/>
			<input type="submit" name="BSuppression" value="Suppression" />
		</form>
		<?php
		}

		if(isset($_GET['Binsertion'])) {
			insertion();
		}
		if(isset($_GET['BModification'])) {
			modification();
		}
		if(isset($_GET['BSuppression'])) {
			suppression();
		}
	?>