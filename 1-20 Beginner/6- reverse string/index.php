<?php

/*

6. Given a string, Write a PHP script to reverse the string.


Example 1:

Input: string = 'mahmoud'
Output: 'duomham'


*/



/**
 * @param String $string
 * @return String
 */
function reverseString(string $string): string
{
    $newString = '';
    $last      = strlen($string);
    for ($i= $last - 1; $i >= 0; $i--) { 
        $newString .= $string[$i];
    }
    return $newString;
}

echo 'Ex 1:';
print_r(reverseString('mahmoud'));