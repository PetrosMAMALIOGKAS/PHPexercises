<?php
class Point {
	public $x;
	public $y;
	
	public function __construct($x , $y) {
		$this->x = $x;
		$this->y = $y;
	}
	
	public function calculeDistance($point) {
		$dx = $this->x -$point->x;
		$dy = $this->y -$point->y;
		return sqrt($dx * $dx + $dy *$dy);
	}
	
	public function __toString() {
		 return '( ' . $this->x . ', ' . $this->y .' )'; 
	}
	
}

?>