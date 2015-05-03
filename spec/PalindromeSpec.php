<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PalindromeSpec extends ObjectBehavior
{
    function it_returns_true_for_palindromes()
    {
		$this->is_palindrome('eye')->shouldReturn(true);
		$this->is_palindrome('racecar')->shouldReturn(true);
    }

	function it_returns_true_for_palindromes_with_spaces()
    {
        $this->is_palindrome('never odd or even')->shouldReturn(true);
    }

	function it_returns_false_for_non_palindromes()
	{
		$this->is_palindrome('abc')->shouldReturn(false);
	}

}
