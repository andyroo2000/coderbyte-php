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

	function  it_returns_b_for_a()
	{
		$this->get_next_letter('a')->shouldReturn('b');
	}

	function  it_returns_c_for_b()
	{
		$this->get_next_letter('b')->shouldReturn('c');
	}

	function  it_returns_g_for_f()
	{
		$this->get_next_letter('f')->shouldReturn('g');
	}

	function it_returns_8_for_8()
	{
		$this->get_next_letter('8')->shouldReturn("8");
	}
}
