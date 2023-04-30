<?php

namespace App\Solution;

function isBalanced(string $str): bool
{
    $size = mb_strlen($str);
    if ($size % 2 != 0) {
        return false;
    }
    $open = 0;
    for ($i = 0; $i < $size; $i++) {
        $cur = mb_substr($str, $i, 1);
        if ($cur == '(') {
            $open++;
        } elseif ( $cur == ')' && $open < 1) {
            return false;
        } else {
            $open--;
        }
    }
    if ($open == 0) {
            return true;
        }
    return false;
}

print_r(isBalanced('(('));
print_r(isBalanced('(())'));  // true
print_r(isBalanced('((())')); // false
