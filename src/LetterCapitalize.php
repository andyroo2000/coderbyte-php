<?php

/**
 * have the function LetterCapitalize(str) take the str parameter being
 * passed and capitalize the first letter of each word. Words will be
 * separated by only one space.
 *
 * Input = "hello world"Output = "Hello World"
 * Input = "i ran there"Output = "I Ran There"
 */

class LetterCapitalize
{
	function capitalize_sentence($string)
	{
		$word_array = explode(" ", $string);
		$word_array_capitalized = array();

		foreach ($word_array as $word) {
			$capitalized_word = $this->capitalize_word($word);
			array_push($word_array_capitalized, $capitalized_word);
		}

		return implode(" ", $word_array_capitalized);
	}

	function capitalize_word($word)
	{
		$character_array = str_split($word);
		$capitalized_word = array(strtoupper($character_array[0]));
		$length_of_word = strlen($word);

		for ($i = 1; $i < $length_of_word; $i++)
		{
			array_push($capitalized_word, $character_array[$i]);
		}

		return implode($capitalized_word);
	}

}
