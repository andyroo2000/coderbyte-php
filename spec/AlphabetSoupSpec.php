<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AlphabetSoupSpec extends ObjectBehavior
{
    function it_alphabetizes_strings()
    {
        $this->alphabetize('coderbyte')->shouldReturn('bcdeeorty');
		$this->alphabetize('hooplah')->shouldReturn('ahhloop');
    }
}
