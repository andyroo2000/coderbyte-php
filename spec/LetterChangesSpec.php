<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LetterChangesSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LetterChanges');
    }
}
