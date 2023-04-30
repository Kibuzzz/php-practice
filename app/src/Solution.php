<?php

namespace App\Solution;

function isBalanced(string $str): bool
{
    $counter = 0;
    $size = strlen($str);
    for ($i = 0; $i < $size; $i++) {
        $counter = $str[$i] === '(' ? $counter++ : $counter--;
        if ($counter < 0) {
            return false;
        }
    }
    return $counter == 0;
}

print_r(isBalanced('(('));
print_r(isBalanced('(())'));  // true
print_r(isBalanced('((())')); // false
