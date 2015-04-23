<?php
namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SimpleAddingSpec extends ObjectBehavior
{
    function it_returns_3_for_2()
    {
    	$this->simple_adding(2)->shouldReturn(3);
    }

	function it_returns_6_for_3()
	{
		$this->simple_adding(3)->shouldReturn(6);
	}

	function it_returns_78_for_12()
	{
		$this->simple_adding(12)->shouldReturn(78);
	}
}
