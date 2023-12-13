<?php

class Solution
{
    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x)
    {
        if (strval($x) === strrev(strval($x))) {
            return true;
        }
        return false;
    }
}

$sum = new Solution();

$sum->isPalindrome(121);
