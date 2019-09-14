<?php
$villes = $_GET['villes'];
$villesTab = explode(" ", $villes);
echo '<form><select name="selection">';
foreach ($villesTab as $ville){
	echo '<option value="' . $ville . '">' . $ville . '</option>';
}
echo '</select>';
?>