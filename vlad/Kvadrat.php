<?php
namespace vlad;
class Kvadrat extends Lineunoe implements \core\EquationInterface {
	public $dis;
	public function dcrm($a1, $b1, $c1){
		$dis = ($b1 * $b1) - (4 * $a1 * $c1);
		return $this -> dis = $dis;
	}
	public function solve($a,$b,$c)
{
	if($a === 0)
{
	return array($this->linear($b,$c));
}
	else
{
	$dis = $this->dcrm($a,$b,$c);

	if ($dis < 0)
{
	$this->x = false;
	throw new \vlad\Burmantov('ошибка');
}
	elseif ($dis > 0)
{
	Log::log("Это квадратное уравнение");
	$t1=((-$b + sqrt($dis)) / (2 * $a));
	$t2=((-$b - sqrt($dis)) / (2 * $a));
	return $this->x= array($t1,$t2);
}
	else
{
	return $this->x = array((-$b/2*$a));
}
}
}

    public function vlad($a, $b, $c)
    {
        // TODO: Implement vlad() method.
    }
}
?>