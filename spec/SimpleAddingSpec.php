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
}
