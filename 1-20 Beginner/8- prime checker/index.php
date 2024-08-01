<?php

/*

8. Given a integer number, Write a PHP script to check if the number is prime or not.


Example 1:

Input: n = 1
Output: false


Example 2:

Input: n = 2
Output: true

Example 3:

Input: n = 17
Output: true


*/



/**
 * @param Integer $n
 * @return Boolean
 */
function primeChecker(int $n): bool
{
    if ($n <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}

echo 'Ex 1:';
var_dump(primeChecker(1));
echo '<br>';


echo 'Ex 2:';
var_dump(primeChecker(2));
echo '<br>';

echo 'Ex 3:';
var_dump(primeChecker(17));
echo '<br>';
