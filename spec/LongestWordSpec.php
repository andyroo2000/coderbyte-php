<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LongestWordSpec extends ObjectBehavior
{
    function it_returns_love_for_I_love_dogs()
    {
        $this->longest_word("I love dogs")->shouldReturn("love");
    }

    function it_returns_time_for_fun_time()
    {
        $this->longest_word("fun&!! time")->shouldReturn("time");
    }
}
