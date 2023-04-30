<?php

namespace App\Solution;

function isPerfect(int $num): bool
{
    $sqrt = ceil(sqrt($num));
    var_dump($sqrt);
    $sum = 1;
    for ($i = 2; $i < $sqrt; $i++) {
        if ($num % $i == 0) {
            $sum += $i;
            $sum += $num / $i;
            var_dump($i);
            var_dump($sum);
        }
    }
    return $sum == $num;
}

print_r(isPerfect(6)); // true
