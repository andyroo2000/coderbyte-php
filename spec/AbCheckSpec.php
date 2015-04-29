<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AbCheckSpec extends ObjectBehavior
{
    function it_returns_false_if_not_separated_by_3_space()
    {
        $this->check('after badly')->shouldReturn(false);
    }
}
