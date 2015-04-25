<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SimpleSymbolsSpec extends ObjectBehavior
{
    function it_returns_true_if_surrounded_by_characters()
    {
		$character_array = array('+', 'd', '+');
		$this->surrounded_by($character_array, '1')->shouldReturn(true);
    }

	function it_returns_false_if_not_surrounded_by_characters()
	{
		$character_array = array('a', 'd', '+');
		$this->surrounded_by($character_array, '1')->shouldReturn(false);
		$this->surrounded_by($character_array, '0')->shouldReturn(false);
		$this->surrounded_by($character_array, '2')->shouldReturn(false);
	}

	function it_returns_true_if_all_letters_are_surrounded()
	{
		$this->simple_symbols("+d+=3=+s+")->shouldReturn(true);
	}

}
