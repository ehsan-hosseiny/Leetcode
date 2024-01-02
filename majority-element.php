<?php



// The majority element is the element that appears more than ⌊n / 2⌋ times. 
// You may assume that the majority element always exists in the array.

/*
Example 1:
    Input: nums = [2,2,1,1,1,2,2]
    Output: 2

Example 2:
    Input: Input: nums = [3,2,3]
    Output: 3
*/

function majorityElement($nums) {
    $count = 0;
    $candidate = null;

   foreach ($nums as $num) {
    if($count === 0){
        $candidate = $num;
    }
    $count += ($num === $candidate)? 1 : -1;

   }
   return $candidate;
    
}