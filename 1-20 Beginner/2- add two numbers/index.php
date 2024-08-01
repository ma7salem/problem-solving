<?php

/*

2. Given two integer number $n1 and $n2, Write a PHP script to add two numbers.


Example 1:

Input: n1 = 1, n2 = 3
Output: 4

*/



/**
 * @param Integer $n1
 * @param Integer $n2
 * @return Integer
 */
function addTwoNumbers($n1, $n2) 
{
    return $n1 + $n2;
}


print_r(addTwoNumbers(1, 3));