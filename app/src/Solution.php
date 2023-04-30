<?php

namespace App\Solution;

use function App\Symbols\isVowel;

function countVowels($str)
{
    $r = 0;
    $size = strlen($str);
    for ($i = 0; $i < $size; $i++) {
        $char = substr($str, $i, 1);
        if (isVowel($char)) {
            $r += 1;
        }
    }
    return $r;
}
// BEGIN (write your solution here)
print_r(countVowels('One')); // 2
print_r(countVowels('London is the capital of Great Britain')); // 13

// END


