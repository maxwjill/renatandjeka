<?php
use PHPUnit\Framework\TestCase;
use vlad\Kvadrat;
use vlad\Exception;

class KvadratTest extends TestCase 
{

	 public function testSolve()
	{
	      $my = new Kvadrat();
	      $this->assertSame(array(6.0,2.0), $my->solve(1, -8, 12));
	      $this->assertSame(array(3), $my->solve(1, -6, 9));
	      $this->assertSame(array(-6), $my->solve(1, 12, 36));
	}
	
}
