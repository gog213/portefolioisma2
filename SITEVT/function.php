<?php

	function connexion() {
		$bdd = mysqli_connect('172.16.205.114', '13101', '1slam*', 'GESTION');
		return $bdd;
	}

	function insertion() {
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$login = $_POST['login'];
		$mdp = md5($_POST['mdp']);

		$bdd = connexion();
		$sql = "INSERT INTO user (nom, prenom, login, mdp) VALUES ('$nom', '$prenom', '$login', '$mdp')";
		mysqli_query($bdd, $sql);
	}

	function modification() {
		$ancienlogin = $_POST['ancienlogin'];
		$login = $_POST['login'];

		$bdd = connexion();
		$sql = "UPDATE user SET login='$login' WHERE login='$ancienlogin'";
		mysqli_query($bdd, $sql);
	}

	function suppression() {
		$login = $_POST['login'];

		$bdd = connexion();
		$sql = "DELETE FROM user WHERE login='$login'";
		mysqli_query($bdd, $sql);
	}

?>