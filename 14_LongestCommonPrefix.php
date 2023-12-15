<?php

class Solution
{
    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        $prefix = '';

        for ($i = 0; $i < strlen($strs[0]); $i++) {

            for ($y = 0; $y < count($strs); $y++) {

                if ($strs[$y][$i] !== $strs[0][$i]) {
                    return $prefix;
                }
            }
            $prefix .= $strs[0][$i];
        }
        return $prefix;
    }
}

// 範例1：
// 輸入： strs = ["flower","flow","flight"]
// 輸出： "fl"
// 範例2：
// 輸入： strs = ["dog","racecar","car"]
// 輸出： ""
// 解釋：輸入字串之間沒有公共前綴。

// ["flower","flow","flight"]
// ["dog","racecar","car"]

$test = new Solution();

echo $test->longestCommonPrefix(["flower", "flow", "flight"]);
