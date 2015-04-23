<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CheckNumsSpec extends ObjectBehavior
{
    function it_returns_true_for_3_and_122()
    {
        $this->check_nums(3, 122)->shouldReturn(true);
    }

	function it_returns_false_for_122_and_3()
	{
		$this->check_nums(122, 3)->shouldReturn(false);
	}

	function it_returns_neg_1_for_5_and_5()
	{
		$this->check_nums(5, 5)->shouldReturn("-1");
	}

}
