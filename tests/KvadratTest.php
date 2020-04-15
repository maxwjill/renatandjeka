<?php
use PHPUnit\Framework\TestCase;
use vlad\Kvadrat;
use vlad\Exception;

class KvadratTest extends TestCase 
{

	public function testDiscriminant()
	{
	      $my = new Kvadrat();
	      $this->assertEquals(-184, $my->dcrm(5, 6, 11));
	      $this->assertEquals(16, $my->dcrm(2, 8, 6));
	      $this->assertEquals(13, $my->dcrm(3, 5, 1));
	}
	
	 public function testSolve()
	{
	      $my = new Kvadrat();
	      $this->assertSame(array(6.0,2.0), $my->solve(1, -8, 12));
	      $this->assertSame(array(3), $my->solve(1, -6, 9));
	      $this->assertSame(array(-6), $my->solve(1, 12, 36));
	}
	
}
