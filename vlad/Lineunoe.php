<?php
namespace vlad; 
class Lineunoe { 
        private $x;
	
	/* public function GetX() {
		return $this->x;
	}*/
	public function yr ($a, $b){
		if ($a == 0){
			return $this -> x = false;
		}
		else {
		$this->x = (-$b/$a);
                return $this->x;
		}
	}
}
?>