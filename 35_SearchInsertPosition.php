<?php

class Solution
{
    /**
     * @param int[] $nums
     * @param int $target
     * @return int
     */
    function searchInsert($nums, $target)
    {
        // to accomplish the time complexity we will use binary search.
        $firstIndex = 0;
        $lastIndex = count($nums) - 1;

        while ($firstIndex <= $lastIndex) {
            $midPointIndex = floor(($firstIndex + $lastIndex) / 2);

            if ($nums[$midPointIndex] == $target) {
                return $midPointIndex;
            }

            if ($nums[$midPointIndex] < $target) {
                $firstIndex = $midPointIndex + 1;
            } else {
                $lastIndex = $midPointIndex - 1;
            }
        }

        return $firstIndex;
    }
}

$sum = new Solution();

$aArray = [1, 3, 5, 6];
$int = $sum->searchInsert($aArray, 7);
print_r($int);
