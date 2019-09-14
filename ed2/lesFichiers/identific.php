<?php
$userName = $_GET['userName'];
$password = $_GET['password'];
$fileUse = fopen('login.txt','r');
$ligne = fread($fileUse , 255);
$dataArray = explode(' ' , $ligne);
for ($i = 0; $i < count($dataArray); $i = $i + 2) {
	if (($dataArray[$i] == $userName && $dataArray[$i + 1] == $password)) {
		header('Location: bienvenu.php');
	} else {
		header('Location: failed.php');
	}
	
}
?>