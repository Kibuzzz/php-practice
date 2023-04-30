<?php

namespace App\Symbols;

function addDigits(int $a): int
{
    if ($a < 10) {
        return $a;
    }
    $str = (string) abs($a);
    $size = mb_strlen($str);
    $sum = 0;
    for ($i = 0; $i < $size; $i++) {
        $char = mb_substr($str, $i, 1);
        $sum += (int) $char; 
    }
    return addDigits($sum);
}

print_r(addDigits(0)); // 0
print_r(addDigits(1)); // 1
print_r(addDigits(9)); // 9
print_r(addDigits(10)); // 1
print_r(addDigits(38)); // 2
