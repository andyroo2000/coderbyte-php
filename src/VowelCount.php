<?php

class VowelCount
{

    public function vowel_count($string)
    {
        $letters_in_word = str_split($string);
        $vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
        $total_vowels = 0;

        foreach ($letters_in_word as $letter) {
            if (in_array($letter, $vowels)) {
                $total_vowels++;
            }
        }

        return $total_vowels;
    }
}
