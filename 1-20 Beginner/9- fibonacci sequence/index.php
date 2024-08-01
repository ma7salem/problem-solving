<?php

/*

9. Given a integer number, Write a PHP script to generate the Fibonacci sequence up to a certain number.


Example 1:

Input: n = 10
Output: [0, 1, 1, 2, 3, 5, 8]


Example 2:

Input: n = 20
Output: [0, 1, 1, 2, 3, 5, 8, 13]



*/



/**
 * @param Integer $n
 * @return Array
 */
function generateFibonacci(int $n): array
{
    $arr    = [];
    $first  = 0;
    $last   = 1;
    if($n >= 1){
        $arr[] = $first;
    }
    if($n >= 2){
        $arr[] = $last;
    }
    while (true) {
        $next = $first + $last;
        if($next > $n){
            break;
        }
        $arr[] = $next;
        $first = $last;
        $last  = $next;
    }
    return $arr;
}

echo 'Ex 1:';
var_dump(implode(',',generateFibonacci(10)));
echo '<br>';


echo 'Ex 2:';
var_dump(implode(',',generateFibonacci(2)));
echo '<br>';
