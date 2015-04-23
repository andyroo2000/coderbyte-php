<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CheckNumsSpec extends ObjectBehavior
{
    function it_returns_true_for_3_and_122()
    {
        $this->check_nums(3, 122)->shouldReturn(true);
    }
}
