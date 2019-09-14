<?php 

$fileCon = fopen('http://www.paokmania.gr/', 'r');

while ($ligne = fgets($fileCon, 255)) {
	echo htmlspecialchars($ligne) . '<br/>' . PHP_EOL;	
}
fclose($fileCon);
?>