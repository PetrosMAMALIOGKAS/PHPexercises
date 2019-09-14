<?php
$titre = $_GET['titre'];
$css = $_GET['css'];
$html = $_GET['html'];

?>
<!doctype html>
<html>
	<head>
		<title>generation de page</title>
		<style>
			<?php echo $css; ?>
			
		</style>
	</head>
	<body>
		<h1><?php echo $titre; ?></h1>
		<?php echo $html; ?>
	</body>
</html>
	
	