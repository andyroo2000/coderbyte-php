<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class VowelCountSpec extends ObjectBehavior
{
    function it_returns_2_for_hello()
    {
        $this->vowel_count("hello")->shouldReturn(2);
    }

    function it_returns_3_for_andrew_landry()
    {
        $this->vowel_count("Andrew Landry")->shouldReturn(3);
    }

    function it_returns_10_for_Team_America_World_Police()
    {
        $this->vowel_count("Team America World Police")->shouldReturn(10);
    }
}
