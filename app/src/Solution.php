<?php

namespace App;

use function Funct\Symbols\isVowel;

function countVowels($text)
{
    $count = 0;
    $text = mb_strtolower($text);
    for ($i = 0; $i < mb_strlen($text); $i++) {
        if (isVowel(mb_substr($text, $i, 1))) {
            $count++;
        }
    }
    return $count;
}
