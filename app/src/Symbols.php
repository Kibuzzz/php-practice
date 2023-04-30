<?php

namespace App\Symbols;

function isPowerOfThree(int $a): bool
{
    $power = 0;
    while ($a > pow(3, $power)){
        $power++;
    }
    return $a === pow(3, $power);
}

 
print_r(isPowerOfThree(1)); // → true (3^0)
print_r(isPowerOfThree(3)); // → true
print_r(isPowerOfThree(4)); // → false
print_r(isPowerOfThree(9)); // → true
