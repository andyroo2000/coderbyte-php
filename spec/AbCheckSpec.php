<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AbCheckSpec extends ObjectBehavior
{
    function it_returns_false_if_not_separated_by_3_spaces()
    {
        $this->check('after badly')->shouldReturn(false);
    }

	function it_returns_true_if_separated_by_3_spaces()
    {
        $this->check('Laura sobs')->shouldReturn(true);
    }
}
