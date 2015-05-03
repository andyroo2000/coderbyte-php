<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ArithGeoSpec extends ObjectBehavior
{
    function it_returns_arithmetic_when_sequence_is_arithmetic()
    {
        $this->arith_geo(array(5, 10, 15))->shouldReturn('Arithmetic');
    }

	function it_returns_geometric_when_sequence_is_geometric()
	{
		$this->arith_geo(array(2, 6, 18))->shouldReturn('Geometric');
	}

	function it_returns_negative_one_when_sequence_is_unidentified()
	{
		$this->arith_geo(array(2, 6, 19))->shouldReturn('-1');
	}

	function it_returns_true_when_arithmetic()
	{
		$this->is_arithmetic(array(5, 10, 15))->shouldReturn(true);
	}

	function it_returns_false_when_not_arithmetic()
	{
		$this->is_arithmetic(array(5, 10, 13))->shouldReturn(false);
	}

	function it_returns_true_when_geometric()
	{
		$this->is_geometric(array(2, 6, 18, 54))->shouldReturn(true);
	}

	function it_returns_false_when_not_geometric()
	{
		$this->is_geometric(array(2, 6, 18, 52));
		$this->is_geometric(array(2, 4, 16, 24));
	}
}
