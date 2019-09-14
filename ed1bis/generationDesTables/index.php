<!doctype html>
<html>
<head>
	<title>table de multiplication</title>
	<style>
		table,tr,td,th {
			border : 1px solid black;
		}
		th {
			background-color: yellow;
		}
		tr:nth-child(odd) {
			background-color: gray;
		}
		table {
			border-collapse: collapse;
		}
		.carreRed {
			background-color: red;
		}
	</style>
</head>
<body>
	<h1>Table de multiplication</h1>
	<form action="index.php" method="get">
		<label for="lignes">Table de multiplication de 1 a </label>
		<input type="number" name="lig" id="lignes" />
		<input type="submit" value="submit" />
	</form>
	<?php
		$lignes = $_GET['lig'];
		$lignes++;
		echo '<table>';
		for ($i = 0; $i < $lignes; $i++) {
			if ($i == 0) {
				echo '<tr><th></th>';
				for ($j = 1; $j < $lignes; $j++) {
					
					echo '<th>' . $j . '</th>';
					
				}
			}  // end if
			if ($i > 0) {
				echo '<tr><th>' . $i . '</th>';
				for ($j = 1; $j < $lignes; $j++) {
		?>		
				<td <?php if ($i == $j) { echo 'class="carreRed"';} ?> > 	
		<?php
					echo  $i * $j . '</td>';
				}
			}   // end if
			echo '</tr>';
		}
		echo '</table>';
	?>
</body>
</html>