<?php

/*
 * Using the PHP language, have the function LetterChanges(str) take the str parameter
being passed and modify it using the following algorithm. Replace every letter in
the string with the letter following it in the alphabet (ie. c becomes d, z becomes a).
Then capitalize every vowel in this new string (a, e, i, o, u) and finally return this
modified string.
*/

class LetterChanges
{
	const ALPHABET = "abcdefghijklmnopqrstuvqyza";
	const VOWELS = "aeiou";

	function letter_changes($string)
	{
		$characters = str_split($string);
		$result = "";

		foreach ($characters as $character) {
			$result .= $this->get_next_letter($character);
		}

		return $result;
	}

	function get_next_letter($letter) {
		$characters = str_split(self::ALPHABET);

		if (!in_array($letter, $characters)) {
			return $letter;
		}

		$letter_index = array_search($letter, $characters);

		return $characters[$letter_index + 1];
	}
}
