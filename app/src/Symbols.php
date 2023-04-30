<?php

namespace App\Symbols;

function addDigits(int $a): int
{
    if ($a < 10) {
        return $a;
    }
    $sum = 0;
    while ($a > 0) {
        $sum += $a % 10;
        $a = (int) $a / 10;
    }
    return addDigits($sum);
}

print_r(addDigits(0)); // 0
print_r(addDigits(1)); // 1
print_r(addDigits(9)); // 9
print_r(addDigits(10)); // 1
print_r(addDigits(38)); // 2
