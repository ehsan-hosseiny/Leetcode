<?php

// Given an array pf integers nums and an integer target. return indices of two numbers such that
// they add up to target

// You may assume that each input would have exactlyone solution, and you may not use the same element twice.

// You can return the answer in any order

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
     * @param Integer[] $target
     * @return Integer[]
     */
    function twoSum($nums,$target){
        $sum= 0;
        $result=[];
        $i=0;

        foreach($nums as $index => $num){
            foreach($nums as $index2 => $num2){
                if($num + $num2 == $target AND $index !=$index2){
                    return [$index,$index2];
                }
            }
        }


    }

}

