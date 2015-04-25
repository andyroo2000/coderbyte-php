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
	function simple_symbols($string)
	{
		$string_array = str_split($string);
		$string_length = strlen($string);

		for ($i = 1; $i < $string_length; $i++) {
			$is_a_letter = preg_match("/[a-z,A-Z]/u", $string_array[$i]);
			$not_surrounded_by_symbols = !$this->surrounded_by($string_array, $i);

			if ($is_a_letter && $not_surrounded_by_symbols) {
				return false;
			}
		}

		return true;
	}

	function surrounded_by($character_array, $index)
	{
		if ($index < 1 || $character_array[$index - 1] != '+' || $character_array[$index + 1] != '+') {
			return false;
		}

		return true;
	}
}
