<?php

namespace App\Solution;

function isPerfect(int $num): bool
{
    $sum = 1;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $num;
}

print_r(isPerfect(0)); // true
