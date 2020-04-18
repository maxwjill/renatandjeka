<?php
use PHPUnit\Framework\TestCase;
use vlad\Lineunoe;
use vlad\Burmantov;

class LineunoeTest extends TestCase 
{
	protected $objLine;

	public function testLineunoe()
	{
	      $my = new Lineunoe();
	      $this->assertEquals(-3, $my->yr(2, 6));
	      $this->assertEquals(-2, $my->yr(4, 8));
	      $this->assertEquals(-2, $my->yr(8, 16));
	}
public function testFailingLlinear()
        {
        	$this->expectException(Burmantov::class);
		$my = new Lineunoe();
	        $my->yr(0, 16);
        }

}