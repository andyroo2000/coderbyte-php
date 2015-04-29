<?php

/**
 * Have the function ABCheck(str) take the str parameter being passed and return
 * the string true if the characters a and b are separated by exactly 3 places
 * anywhere in the string at least once (ie. "lane borrowed" would result in true
 * because there is exactly three characters between a and b). Otherwise return
 * the string false.
 *
 * Input = "after badly" -> Output = "false"
 * Input = "Laura sobs" -> Output = "true"
 *
 */

class AbCheck
{
	function check($string)
	{
		$string_length = strlen($string);

		for ($i = 0; $i < $string_length - 3; $i++)
		{
			if ($string[$i] === $string[$i + 3])
			{
				return true;
			}
		}

		return false;
	}

}
