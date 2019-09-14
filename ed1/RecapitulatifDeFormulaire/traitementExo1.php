<?php
	if (isset($_POST["name"])) {
		$name = $_POST["name"];
	} else {
		echo "nom pas trouve";
	}
	if (isset($_POST["password"])) {
		$password = $_POST["password"];
		
	} else {
		echo "password pas trouve";
	}
	if (isset($_POST["sexe"])) {
		$sexe = $_POST["sexe"];
	} else {
		echo "sexe pas trouve";
	}
	if (isset($_POST["ville"])) {
		$ville = $_POST["ville"];
	} else {
		echo "ville pas trouve";
	}
	
	if (isset($_POST["loisirs"])) {
		$loisirs[] = $_POST["loisirs"];
	} else {
		echo "loisirs pas trouve";
	}
	
	if (isset($_POST["animaux"])) {
		$animaux[] = $_POST["animaux"];
	} else {
		echo "animaux pas trouve";
	}
	
	echo "nom...: " . $name . "<br/>password...: $password<br/>sexe..: $sexe" ;
	
?>