<?php

namespace App\Solution;

function isHappy(string $str): bool
{
    $balance = 0;
    $size = strlen($str);
    for ($i = 0, $j = $size - 1; $i < $size / 2; $i++, $j--) {
        $balance += $str[$i] - $str[$j];
    }
    return $balance === 0;
}

 
print_r((string)isHappy('385916') . "\n"); // true
print_r((string)isHappy('231002') . "\n"); // false
print_r((string)isHappy('1222') . "\n"); // false
print_r((string)isHappy('054702') . "\n"); // true
print_r((string)isHappy('00') . "\n"); // true