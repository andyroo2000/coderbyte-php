<?php

/**
 * have the function AlphabetSoup(str) take the str string parameter being
 * passed and return the string with the letters in alphabetical order
 * (ie. hello becomes ehllo). Assume numbers and punctuation symbols will
 * not be included in the string.
 *
 * Input = "coderbyte" -> Output = "bcdeeorty"
 * Input = "hooplah" -> Output = "ahhloop"
 */

class AlphabetSoup
{
	const ALPHABET = "abcdefghijklmnopqrstuvqyz";

	function alphabetize($string)
	{
		$alphabet = str_split(self::ALPHABET);
		$string_array = str_split($string);
		$result = '';

		foreach ($alphabet as $letter)
		{
			foreach ($string_array as $character)
			{
				$result .= $this->return_character_matches($letter, $character);
			}
		}

		return $result;
	}

	private function return_character_matches($character, $string_character) {
		if ($character === $string_character) {
			return $character;
		}
	}

}
