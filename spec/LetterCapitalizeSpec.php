<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LetterCapitalizeSpec extends ObjectBehavior
{
    function it_returns_Hello_World_for_hello_world()
    {
        $this->letter_capitalize('hello world')->shouldReturn('Hello World');
    }
}
