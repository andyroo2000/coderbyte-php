<?php

/**
 * Have the function SimpleSymbols(str) take the str parameter being
 * passed and determine if it is an acceptable sequence by either
 * returning the string true or false. The str parameter will be
 * composed of + and = symbols with several letters between them
 * (ie. ++d+===+c++==a) and for the string to be true each letter
 * must be surrounded by a + symbol. So the string to the left would
 * be false. The string will not be empty and will have at least one
 * letter.
 *
 * Input = "+d+=3=+s+"Output = "true"
 * Input = "f++d+"Output = "false"
 */


class SimpleSymbols
{
	function surrounded_by($character_array, $index)
	{
		if ($index < 1) {
			return false;
		}

		if (($character_array[$index - 1] != '+') || ($character_array[$index + 1] != '+')) {
			return false;
		}

		return true;
	}
}
