<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TimeConvertSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('TimeConvert');
    }
}
