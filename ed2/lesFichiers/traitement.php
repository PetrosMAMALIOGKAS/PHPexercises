<?php
$userName = $_POST['userName'];
$password = $_POST['password'];
$input =  $userName . " " . $password . " ";
$fileUse = fopen('login.txt','a');
fwrite($fileUse , $input);
fclose($fileUse);
echo ' user added in login.txt';
echo '<br /><br /><a href="admin.php">Enter new User</a>'; 
?>