<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LongestWordSpec extends ObjectBehavior
{
    function it_returns_2_for_hello()
    {
        $this->LongestWord("hello")->shouldReturn("hello");
    }
}
