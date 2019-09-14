<?php
$users = [
	"petros" => "mamas",
	"paulos" => "pap",
	"giorgos" => "mam"
];

$login = "";
$mot = "";
$provenance=$_SERVER['HTTP_REFERER'];


if (isset($_POST['login'])) {
	$login = $_POST['login'];
} else {
	echo "user name not set";
}

if (isset($_POST['mot'])) {
	$mot = $_POST['mot'];
} else {
	echo "password not set";
}

if (array_key_exists($login, $users) && $users[$login] == $mot) {
		echo "bienvenu " . $login;
}else {
	echo 'click <a href="' . $provenance . '">here</a>' .' to try again';
}


?>