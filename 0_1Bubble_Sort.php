<?php

#BubbleSort冒泡排序

$arr = [99, 10, 20, 40, 30];

$arrLength = count($arr);

for ($i = 0; $i < $arrLength; $i++) {

    #第二層迴圈是為了讓每一次迴圈-1 然後從頭重新比對
    for ($y = 0; $y < $arrLength - $i - 1; $y++) {

        #當現在的值比右邊大的時候就把當前的值跟右邊的交換
        if ($arr[$y] > $arr[$y + 1]) {

            $empty = $arr[$y];
            $arr[$y] = $arr[$y+1];
            $arr[$y+1] = $empty;
        }
    }
}

print_r($arr);
