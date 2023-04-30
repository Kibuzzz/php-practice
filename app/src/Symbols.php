<?php

namespace App\Symbols;

function fib(int $a): int
{
    if ($a === 0) {
        return 0;
    }
    if ($a === 1) {
        return 1;
    }
    return fib($a - 1) + fib($a - 2);
}

print_r(fib(3) . "\n"); // 2
print_r(fib(5) . "\n"); // 5
print_r(fib(10) . "\n"); // 55
