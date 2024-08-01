<?php

/*

3. Given an integer, Write a PHP script to check if the number is even or odd.


Example 1:

Input: n = 1
Output: 'odd'

Example 2:

Input: n = 4
Output: 'even'

*/



/**
 * @param Integer $n
 * @return String
 */
function oddEvenChecker(int $n): string
{
    return ($n % 2) == 0 ? 'even' : 'odd';
}

echo 'Ex 1:';
print_r(oddEvenChecker(1));
echo '<br>';
echo 'Ex 2:';
print_r(oddEvenChecker(4));