<?php

/*

4. Given 3 integers numbers n1, n2 and n3, Write a PHP script to find the largest of three numbers.


Example 1:

Input: n1 = 1, n2 = 2, n3 = 3
Output: 3

Example 2:

Input: n1 = 4, n2 = 3, n3 = 0
Output: 4

Example 3:

Input: n1 = 5, n2 = 3, n3 = 5
Output: 5

*/



/**
 * @param Integer $n1
 * @param Integer $n2
 * @param Integer $n3
 * @return Integer
 */
function findMaxOfThreeInteger(int $n1, int $n2, int $n3): int
{
    if($n1 > $n2 && $n1 > $n3){
        return $n1;
    }elseif ($n2 > $n1 && $n2 > $n3) {
        return $n2;
    }else{
        return $n3;
    }

}

echo 'Ex 1:';
print_r(findMaxOfThreeInteger(1,2,3));
echo '<br>';
echo 'Ex 2:';
print_r(findMaxOfThreeInteger(4,3,0));
echo '<br>';
echo 'Ex 2:';
print_r(findMaxOfThreeInteger(5,3,5));