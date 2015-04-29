<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class WordCountSpec extends ObjectBehavior
{
    function it_returns_2_for_Hello_World()
    {
        $this->count('Hello World')->shouldReturn(2);
    }
}
