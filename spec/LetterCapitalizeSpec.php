<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LetterCapitalizeSpec extends ObjectBehavior
{
    function it_returns_Hello_World_for_hello_world()
    {
        $this->capitalize_sentence('hello world')->shouldReturn('Hello World');
    }

	function it_returns_I_Ran_There_for_i_ran_there()
	{
		$this->capitalize_sentence('i ran there')->shouldReturn('I Ran There');
	}

	function it_capitalizes_a_word()
	{
		$this->capitalize_word('hello')->shouldReturn('Hello');
		$this->capitalize_word('andrew')->shouldReturn('Andrew');
	}

	function it_capitalizes_a_letter()
	{
		$this->capitalize_word('a')->shouldReturn('A');
	}


}
