<?php
require_once('Point.php');
class Rectangle extends Polygone {
	
	public function __constuct($upRight, $downLeft) {
		parent::__construct($upRight, new Point($upRight->x, $downLeft->y), $downLeft, new Point($downLeft->x, $upRight->y));
		//$this->points = array($upRight, new Point($upRight->x, $downLeft->y), $downLeft, new Point($downLeft->x, $upRight->y));
		
	}
	
	public function calculeLongeur() {
		$longeur = abs(($this->points[1]->y)-($this->points[0]->y));
		return $longeur;
	}
	
	public function calculelargeur() {
		$largeur = abs(($this->points[1]->x)-($this->points[0]->x));
		return $largeur;
	}
	
	public function perimetre(){
		$peri = ($this->calculeLongeur() * 2) + ($this->calculeLargeur() * 2);
		return $peri;
	}
	
}
?>