<?php

/*

7. Given a string, Write a PHP script to check the string is palindrome or not.


Example 1:

Input: string = 'racecar'
Output: true


Example 2:

Input: string = 'Madam'
Output: true

Example 3:

Input: string = 'terms'
Output: false


*/



/**
 * @param String $string
 * @return Boolean
 */
function palindromeChecker(string $string): bool
{
    $string = strtolower($string);
    $length = strlen($string);
    $left   = 0;
    $right  = $length - 1;

    while ($left < $right) {
        if($string[$left] != $string[$right]){
            return false;
        }
        $left++;
        $right--;
    }
    return true;
}

echo 'Ex 1:';
var_dump(palindromeChecker('racecar'));
echo '<br>';


echo 'Ex 2:';
var_dump(palindromeChecker('Madam'));
echo '<br>';

echo 'Ex 3:';
var_dump(palindromeChecker('terms'));
echo '<br>';
