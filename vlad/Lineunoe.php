<?php
namespace vlad; 
class Lineunoe { 
        private $x;
	
	public function yr ($a, $b){
		if ($a == 0){
			throw new \vlad\Burmantov('Не делитьсяна 0');
                      

		} else {
		$this->x = (-$b/$a);
                return $this->x;
		}
	}
}
?>