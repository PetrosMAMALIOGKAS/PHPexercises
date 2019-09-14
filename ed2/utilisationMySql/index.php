<!doctype html>
<html>
<head>
	<title>utilisation MySql</title>
</head>

<body>
	<?php
	$conn = mysqli_connect('localhost', 'root', '');
	if (!$conn) {
		die('connection failed: ' . mysqli_connect_error());
	}
	$sql = 'CREATE DATABASE identification';
	if (mysqli_query($conn, $sql)) {
		echo '<br/>Database created....';
	} else {
		echo '<br/>Error creating database : ' .mysqli_error($conn);
	}
	$conn = mysqli_connect('localhost', 'root', '', 'identification');
	$sql = "CREATE TABLE personnes (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
									user VARCHAR(20),
									password VARCHAR(20))";
	if (mysqli_query($conn, $sql)) {
		echo '<br/>Table created....';
	} else {
		echo '<br/>Error creating Table : ' .mysqli_error($conn);
	}
	
	
	$fileUse = fopen('../lesFichiers/login.txt', 'r');
	$ligne = fread($fileUse , 255);
	$tabData = explode(' ', $ligne);
	var_dump($tabData);
	for ($i = 0; $i < count($tabData); $i = $i + 2) {
		$t = $i + 1;
		$sql ="INSERT INTO `identification`.`personnes` (`id`, `user`, `password`) VALUES (NULL, '$tabData[$i]', '$tabData[$t]')";
		if (mysqli_query($conn, $sql)) {
			echo '<br/>Data added....';
		} else {
			echo '<br/>Error adding data : ' .mysqli_error($conn);
		}
	}
	fclose($fileUse);
	?>
</body>
</html>
