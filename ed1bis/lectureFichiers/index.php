<?php 

$fileCon = fopen(__FILE__, 'r');

while ($ligne = fgets($fileCon, 255)) {
	echo htmlspecialchars($ligne) . '<br/>' . PHP_EOL;	
}
fclose($fileCon);
?>