<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ArrayAdditionISpec extends ObjectBehavior
{

//	function it_returns_all_combinations()
//    {
//        $this->combination_equals_largest_number(array(2, 4, 6, 7, 10, 2, 9), 20)->shouldReturn(true);
//    }

    function it_determines_if_numbers_can_add_up_to_largest_number()
    {
        $this->combination_equals_largest_number(array(2, 4, 6, 7, 10, 2, 9, 20))->shouldReturn(true);
    }
}
