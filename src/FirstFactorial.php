<?php

/**
 * have the function FirstFactorial(num) take the num parameter being passed
 * and return the factorial of it (ie. if num = 4, return (4 * 3 * 2 * 1)).
 * For the test cases, the range will be between 1 and 18.
 */


class FirstFactorial
{
	function first_factorial($number)
	{
		$result = 1;

		if ($number == 1) {
			return 1;
		}

		for ($i = $number; $i > 1; $i--) {
			$result *= $i;
		}

		return $result;
	}
}
