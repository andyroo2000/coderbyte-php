<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FirstFactorialSpec extends ObjectBehavior
{
    function it_returns_24_for_4()
    {
        $this->first_factorial(4)->shouldReturn(24);
    }

	function it_returns_40320_for_8()
    {
        $this->first_factorial(8)->shouldReturn(40320);
    }

	function it_returns_2_for_2()
    {
        $this->first_factorial(2)->shouldReturn(2);
    }
}
