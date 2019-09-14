<!doctype html>
<html>
<head>
	<title>Lecture BDD</title>
</head>
<body>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "garage");
	if (!$conn) {
		echo mysqli_connect_error();
	}
	$sql = "SELECT * FROM voitures";
	$result = mysqli_query($conn, $sql);
	echo '<table><tr><th>id</th><th>marque</th><th>annee</th><th>couleur</th></tr>';
	while ($ligne = mysqli_fetch_assoc($result)) {
		echo '<tr>';
		echo '<td>' . $ligne['id'] . '</td><td>' . $ligne['marque'] . '</td><td>' . $ligne['anne'] . '</td><td>' . $ligne['couleur'] . '</td>';
		echo '</tr>';
	}
	echo '</table>';
	?>
	
	<form action= "index.php" method="get>
		<label for="color">select a color</label>
		<select name="color" id = "color">
			<option value="verte">vert</option>
			<option value="bleu">bleu</option>
			<option value="rouge">rouge</option>
			<option value="marron">marron</option>
		</select>
		<input type="submit" value="ok" />
	</form>
	<br />
	<?php
	$color = $_GET['color'];
	echo 'list of ' . $color . ' voitures<br />';
	$result = mysqli_query($conn, $sql);
	$num = 0;
	while ($ligne = mysqli_fetch_assoc($result)) {
		if ($ligne['couleur'] == $color) {
			$num++;
		}
	}
	if ($num == 0) {
		echo 'there isnt any ' . $color . ' voiture';
	} else {
		$result = mysqli_query($conn, $sql);
		echo '<table><tr><th>id</th><th>marque</th><th>annee</th><th>couleur</th></tr>';
	while ($ligne = mysqli_fetch_assoc($result)) {
		if ($ligne['couleur'] == $color) {
			echo '<tr>';
			echo '<td>' . $ligne['id'] . '</td><td>' . $ligne['marque'] . '</td><td>' . $ligne['anne'] . '</td><td>' . $ligne['couleur'] . '</td>';
			echo '</tr>';
		}
	}
	echo '</table>';
	}
	
	?>
</body>
</html>