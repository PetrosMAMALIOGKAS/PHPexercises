<?php
require('Point.php');
require('Polygone.php');
require('Rectangle.php');
require('Triangle.php');
$p = new Point(1,1);
$o = new Point(2,2);
$q = new Point(1, 2);
$r = new Point(7, 25);
$pol = new Polygone(array($p, $o, $q));
echo 'point p : ' . $p . '   point o : ' . $o . '<br />';
echo 'distance p-o : ' . $p->calculeDistance($o) . '<br />';
echo 'polygone : ' . $pol . '<br/>';
echo 'nombre de sommets : ' . $pol->nombreDeSommets() . '<br />';
echo 'perimetre : ' . $pol->perimetre() . '<br /><br /><br />';
$rect = new Rectangle(array(new Point(2,5), new Point(8,8)));
echo 'rectangle : ' . $rect . 'nombre de sommets : ' . $rect->nombreDeSommets() . '<br />';
echo 'longeur : '. $rect->calculeLongeur() . '<br />';
echo 'largeur : '. $rect->calculeLargeur() . '<br />';
echo 'perimetre : ' . $rect->perimetre() . '<br /><br /><br />';
$trian = new Triangle(new Point(1,4), new Point(5,3), new Point(5,5));
echo 'triangle : ' . $trian . 'nombre de sommets : ' . $trian->nombreDeSommets() . '<br />';
?>