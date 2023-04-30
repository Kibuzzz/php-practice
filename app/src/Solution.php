<?php

namespace App\Solution;

function isHappy(string $str): bool
{
    $sumLeft = 0;
    $sumRight = 0;
    $size = strlen($str);
    $center = $size / 2;
    for ($i = 0; $i < $center; $i++) {
        $j = $size - 1 - $i;

        $sumLeft += (int) $str[$i];
        $sumRight += (int) $str[$j];
    }
    return $sumLeft == $sumRight;
}

 
print_r(isHappy('385916') . "\n"); // true
print_r(isHappy('231002') . "\n"); // false
print_r(isHappy('1222') . "\n"); // false
print_r(isHappy('054702') . "\n"); // true
print_r(isHappy('00') . "\n"); // true