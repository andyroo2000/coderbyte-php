<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TimeConvertSpec extends ObjectBehavior
{
    function it_returns_time_from_126()
    {
        $this->time_convert(126)->shouldReturn("2:6");
    }

	function it_returns_time_from_45()
	{
		$this->time_convert(45)->shouldReturn("0:45");
	}
}
