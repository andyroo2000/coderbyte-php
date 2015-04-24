<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LetterCapitalizeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LetterCapitalize');
    }
}
