<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SimpleAddingSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('SimpleAdding');
    }

    function it_returns_something()
    {
    	$this->simple_adding(5)->shouldReturn(5);
    }
}
