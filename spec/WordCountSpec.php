<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class WordCountSpec extends ObjectBehavior
{
    function it_returns_2_for_a_2_word_string()
    {
        $this->count('Hello World')->shouldReturn(2);
    }

	function it_returns_3_for_a_3_word_string()
	{
		$this->count('one 22 three')->shouldReturn(3);
	}
}
