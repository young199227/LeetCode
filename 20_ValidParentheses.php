<?php

class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $sArray = str_split($s);

        for ($i = 0; $i < count($sArray); $i += 2) {

            switch ($sArray[$i]) {
                case '(':
                    if ($sArray[$i + 1] !== ')') {
                        return false;
                    }
                    break;
                case '[':
                    if ($sArray[$i + 1] !== ']') {
                        return false;
                    }
                    break;
                case '{':
                    if ($sArray[$i + 1] !== '}') {
                        return false;
                    }
                    break;
            }
        }

        return true;
    }
}

// Input: s = "()"
// Output: true
// Input: s = "()[]{}"
// Output: true
// Input: s = "(]"
// Output: false
// "()"
// "()[]{}"
// "(]"

$test = new Solution();

echo $test->isValid("()[]{]");
