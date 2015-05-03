<?php

/**
 * Have the function ExOh(str) take the str parameter being passed and return the string true if there is an equal
 * number of x's and o's, otherwise return the string false. Only these two letters will be entered in the string,
 * no punctuation or numbers. For example: if str is "xooxxxxooxo" then the output should return false because there
 * are 6 x's and 5 o's.
 *
 * Input = "xooxxo"  ->  Output = "true"
 * Input = "x"       ->  Output = "false"
 *
 */

class ExOh
{
	function x_and_o_are_equal($string)
	{
		$string_length = strlen($string);
		$x_total = 0;
		$o_total = 0;

		for ($i = 0; $i < $string_length; $i++)
		{
			if ($string[$i] == 'x')
			{
				$x_total++;
			}

			if ($string[$i] == 'o')
			{
				$o_total++;
			}
		}

		if ($x_total === $o_total)
		{
			return true;
		}

		return false;
	}
}
