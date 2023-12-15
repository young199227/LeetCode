<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {
        $nums = array_unique($nums);

        return count($nums);
    }
}

// [1,1,2]
// [0,0,1,1,1,2,2,3,3,4]

$sum = new Solution();

$array = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
$sum->removeDuplicates($array);
