<?php

declare(strict_types=1);

namespace src;

/**
 * Pangrams, anagrams and palindromes
 * 
 * Implement each of the functions of the Checker class. 
 * Aim to spend about 10 minutes on each function. 
 */
class Checker
{
    /**
     * A palindrome is a word, phrase, number, or other sequence of characters 
     * which reads the same backward or forward.
     *
     * @param string $word
     * @return bool
     */
    public function isPalindrome(string $word) : bool
    {
        $sanitizedString = $this->sanitizeString($word);
        return $sanitizedString == strrev($sanitizedString);
    }
    
    /**
     * An anagram is the result of rearranging the letters of a word or phrase 
     * to produce a new word or phrase, using all the original letters 
     * exactly once.
     * 
     * @param string $word
     * @param string $comparison
     * @return bool
     */
    public function isAnagram(string $word, string $comparison) : bool
    {
        return $this->sortString($this->sanitizeString($word)) === $this->sortString($this->sanitizeString($comparison));
    }

    /**
     * A Pangram for a given alphabet is a sentence using every letter of the 
     * alphabet at least once. 
     * 
     * @param string $phrase
     * @return bool
     */    
    public function isPangram(string $phrase) : bool
    {
        $alphabet = range('a', 'z');
        $sanitizedString = $this->sanitizeString($phrase);
        $letters = str_split($sanitizedString);
        $uniqueLetters = array_unique($letters);

        return count(array_intersect($alphabet, $uniqueLetters)) === 26;
    }

    /**
     * Removes all spaces and transorms letters to lowercase.
     * @param string $string
     * @return string
     */
    public function sanitizeString(string $string ) : string {
        return strtolower(str_replace(' ', '', $string));
    }

    /**
     * Sort characters and return them.
     * @param string $string
     * @return string
     */
    private function sortString(string $string ) : string {
        $letters = str_split($string);
        sort($letters);
        return implode('', $letters);
    }
}