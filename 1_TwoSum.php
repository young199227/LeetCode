<?php

class Solution
{
    /**
     * @param Integer array $nums
     * @param Integer $target
     * @return Integer array
     */
    function twoSum($nums, $target)
    {
        $twoSum = [];

        for ($i = 0; $i < count($nums); $i++) {

            for ($y = 0; $y < count($nums); $y++) {

                if ($i !== $y && ($nums[$i] + $nums[$y]) === $target) {
                    $twoSum[0] = $i;
                    $twoSum[1] = $y;
                    return $twoSum;
                }
            }
        }
    }
}

$sum = new Solution();

print_r($sum->twoSum([3, 2, 4], 5));
