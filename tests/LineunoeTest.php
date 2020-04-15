<?php
use PHPUnit\Framework\TestCase;
use vlad\Lineunoe;
use vlad\Exception;

class LineunoeTest extends TestCase 
{

	public function testLineunoe()
	{
	      $my = new Lineunoe();
	      $this->assertEquals(-3, $my->yr(2, 6));
	      $this->assertEquals(-2, $my->yr(4, 8));
	      $this->assertEquals(-2, $my->yr(8, 16));
	}

	
}
