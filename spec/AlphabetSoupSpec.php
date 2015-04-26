<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AlphabetSoupSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('AlphabetSoup');
    }
}
