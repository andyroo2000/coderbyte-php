<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ArrayAdditionISpec extends ObjectBehavior
{
    function it_returns_the_largest_number()
    {
        $this->largest_number(array(4, 6, 23, 10, 1, 3))->shouldReturn(23);
    }


}
