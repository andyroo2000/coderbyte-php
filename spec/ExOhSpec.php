<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ExOhSpec extends ObjectBehavior
{
    function it_returns_true_when_x_and_o_are_equal()
    {
        $this->x_and_o_are_equal('xooxxo')->shouldReturn(true);
    }

	function it_returns_false_when_x_and_o_are_unequal()
    {
        $this->x_and_o_are_equal('x')->shouldReturn(false);
    }
}
