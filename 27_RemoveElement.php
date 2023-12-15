<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val)
    {
        for ($i = 0; $i < count($nums); $i++) {
            echo $i;
            if ($nums[$i] === $val) {
                // echo $nums[$i];
                // echo $i;
                unset($nums[$i]);
            }
        }
        // $nums = array_values($nums);
        return count($nums);
    }
}

$sum = new Solution();

$aArray = [0, 1, 2, 2, 3, 0, 4, 2];
$sum->removeElement($aArray, 2);
print_r($aArray);
