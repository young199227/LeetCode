<?php

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s)
    {
        $romanArray = str_split($s);
        $returnInt = 0;

        $roMan = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];

        for ($i = 0; $i < count($romanArray); $i++) {
            $returnInt += $roMan[$romanArray[$i]];

            #因為上面會無腦加上去
            #下面參照以下規則去扣除數字
            #I可以放在V(5)和X(10)之前，得到4和9。 
            #X可以放在L(50) 和C(100) 之前，得到 40 和 90。 
            #C可以放在D(500) 和M(1000) 之前，得到 400 和 900。
            
            switch ($romanArray[$i]) {
                case 'I':
                    if ($romanArray[$i + 1] === 'V' || $romanArray[$i + 1] === 'X') {
                        $returnInt -= 2;
                    }
                    break;
                case 'X':
                    if ($romanArray[$i + 1] === 'L' || $romanArray[$i + 1] === 'C') {
                        $returnInt -= 20;
                    }
                    break;
                case 'C':
                    if ($romanArray[$i + 1] === 'D' || $romanArray[$i + 1] === 'M') {
                        $returnInt -= 200;
                    }
                    break;
            }
        }

        return $returnInt;
    }
}

$solution = new Solution();

echo $solution->romanToInt('MCMXCIV');
