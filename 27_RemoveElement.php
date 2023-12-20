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
        $arrLength = count($nums);

        for ($i = 0; $i < $arrLength; $i++) {
            if ($nums[$i] === $val) {
                unset($nums[$i]);
            }
        }

        return count($nums);
    }
}

$sum = new Solution();

$aArray = [0, 1, 2, 2, 3, 0, 4, 2];
$sum->removeElement($aArray, 2);
print_r($aArray);
