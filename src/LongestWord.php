<?php

class LongestWord
{

    public function longest_word($string)
    {
        $words = explode(' ', $string);
        $longest_word = "";

        foreach ($words as $word) {
            $word = preg_replace("/\\W/u", "", $word);
 
            if (strlen($word) > strlen($longest_word)) {
                $longest_word = $word;
            }
        }

        return $longest_word;
    }

}
