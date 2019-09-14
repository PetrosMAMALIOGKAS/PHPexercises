<?php
require_once('Point.php');
class Polygone {
	public $points;
	
	public function __construct($pointsArray) {
		$length = count($pointsArray);
		$this->points = array();
		for ($i = 0; $i < $length; $i++) {
			$p=$this->points[$i] = $pointsArray[$i]; 
		}
	}
	
	public function nombreDeSommets() {
		return count($this->points);
	}
	
	public function perimetre() {
		$per = 0;
		for ($i = 0; $i < count($this->points); $i++) {
			if ($i == (count($this->points) - 1)) {
				$j = 0;
			} else {
				$j = $i + 1;
			}
			$per  = $per + $this->points[$i]->calculeDistance($this->points[$j]);
		}
		return $per;
	}
	
	
	public function __toString() {
		$str = '( ' ;
		for ($i = 0; $i < count($this->points); $i++) {
			if ($i == (count($this->points) - 1)) {
				$str = $str . $this->points[$i] . ' )';
			} else {
				$str = $str . $this->points[$i] . ', ';
			}
		
		}
		return $str;
	} 
}
?>