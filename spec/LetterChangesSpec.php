<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LetterChangesSpec extends ObjectBehavior
{
    function it_returns_bcd_for_abc()
    {
        $this->letter_changes('abc')->shouldReturn('bcd');
    }

	function it_returns_gvO_Ujnft_for_fun_times()
	{
		$this->letter_changes('fun times!')->shouldReturn('gvO Ujnft!');
	}

	function  it_returns_the_next_letter()
	{
		$this->get_next_letter('a')->shouldReturn('b');
		$this->get_next_letter('b')->shouldReturn('c');
		$this->get_next_letter('f')->shouldReturn('g');
	}

	function it_returns_non_alphabetic_characters_intact()
	{
		$this->get_next_letter('8')->shouldReturn("8");
		$this->get_next_letter('*')->shouldReturn("*");
		$this->get_next_letter('%')->shouldReturn("%");
	}
}
