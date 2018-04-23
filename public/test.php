<?php

$arr = [-5, 6, 7, -2, -1, 0, 1, 2, 3, 4, 5];

function insertionSort(array $a): array
{
    for ($i = 1; $i < count($a); ++$i):
        $x = $a[$i];
        for ($j = $i - 1; $j >= 0 && $a[$j] > $x; $j--):
            $a[$j + 1] = $a[$j];
        endfor;
        $a[$j + 1] = $x;
    endfor;

    return $a;
}

for ($i = 0; $i < count($arr); $i++):
    for ($j = $i + 1; $j < count($arr); $j++):
        if ($arr[$i] > $arr[$j]) :
            $arr[$j] ^= $arr[$i] ^= $arr[$j] ^= $arr[$i];
        endif;
    endfor;
endfor;

echo implode(' ', insertionSort($arr));