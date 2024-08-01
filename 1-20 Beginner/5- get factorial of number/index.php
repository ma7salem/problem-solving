<?php

/*

5. Given an integer number n, Write a PHP script to get the factorial.


Example 1:

Input: n = 1
Output: 1

Example 2:

Input: n = 2
Output: 2

Example 3:

Input: n = 5
Output: 120

*/



/**
 * @param Integer $n
 * @return Integer
 */
function getFactorial(int $n): int
{
    $result = 1;
    while ($n >= 1) {
        $result = $result * $n;
        $n = $n - 1;
    }
    return $result;
}

echo 'Ex 1:';
print_r(getFactorial(1));
echo '<br>';
echo 'Ex 2:';
print_r(getFactorial(2));
echo '<br>';
echo 'Ex 2:';
print_r(getFactorial(5));