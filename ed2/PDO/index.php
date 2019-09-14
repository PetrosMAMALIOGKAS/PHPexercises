<?php
try {
	$conn = new PDO('mysql:host=localhost;dbname=pdodata' , 'root', '');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo 'Conneced succefully';
} 
catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
for ($i = 0; $i < 1000; $i++) {
	try {
		$sql = "INSERT INTO `pdodata`.`personnes` (`id`, `user`, `password`) VALUES (NULL, '_numero_', '!_numero_!')";
		$conn->exec($sql);
	} 
	catch (PDOException $e){
		echo $sql . '<br />' . $e->getMessage(); 
	}
	
}
?>