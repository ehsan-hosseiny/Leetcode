<?php

// Given an integer array nums and an integer val, 
// remove all occurrences of val in nums in-place. The order of the elements may be changed.
// Then return the number of elements in nums which are not equal to val.

// Consider the number of elements in nums which are not equal to val be k, to get accepted, 
// you need to do the following things:



/*
Example 1:
    Input: nums = [2,7,11,15], target = 9
    Output: [0,1]
    Explanation: Because nums[0] + nums[1] == 9, we return [0,1]


Example 2:
    Input: nums=[3,2,4] , taget = 6
    Output: [1,2]


Example 3:
    Input: nums=[3,3],target = 6
    Output: [0,1]
*/

class solution{
    
        /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $size = count($nums);
        $k=0;
        for($p=0; $p<$size ; $p++){
            if($nums[$p] != $val){
                $nums[$k]=$nums[$p];
                $k++;
            }
        }
        return $k;   
    }

}

