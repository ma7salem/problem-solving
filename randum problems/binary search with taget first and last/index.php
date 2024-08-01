<?php

/*

Given an array of integers nums sorted in non-decreasing order, find the starting and ending position of a given target value.

If target is not found in the array, return [-1, -1].



Example 1:

Input: nums = [5,7,7,8,8,10], target = 8
Output: [3,4]


Example 2:
Input: nums = [5,7,7,8,8,10], target = 6
Output: [-1,-1]

Example 3:
Input: nums = [], target = 0
Output: [-1,-1]

*/



/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function searchRange($nums, $target) {
    $first = -1;
    $last  = -1;

    $low   = 0;
    $high  = count($nums) -1;

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);

        if($nums[$mid] > $target){
            $high = $mid - 1;
        }elseif ($nums[$mid] < $target) {
            $low = $mid + 1;
        }else{
            $first = $mid;
            $high = $mid -1;
        }
    }

    
    $low   = 0;
    $high  = count($nums) -1;

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);

        if($nums[$mid] > $target){
            $high = $mid - 1;
        }elseif ($nums[$mid] < $target) {
            $low = $mid + 1;
        }else{
            $last = $mid;
            $low = $mid + 1;   
        }
    }
    return [$first, $last];
}



print_r(searchRange([5,3,4,8,8,8,10], 8));
print_r(searchRange([], 6));
print_r(searchRange([5,7,7,8,8,10], 6));