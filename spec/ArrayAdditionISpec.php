<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ArrayAdditionISpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('ArrayAdditionI');
    }
}
