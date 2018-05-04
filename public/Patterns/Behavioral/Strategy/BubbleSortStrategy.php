<?php

namespace Patterns\Behavioral\Strategy;

class BubbleSortStrategy extends AbstractSortStrategy
{
    public function sort(array $dataSet): array
    {
        for ($i = 0, $count = count($dataSet); $i < $count; ++$i) {
            for ($j = $i + 1; $j < $count; ++$j) {
                if ($dataSet[$i] > $dataSet[$j]) {
                    $dataSet[$j] ^= $dataSet[$i] ^= $dataSet[$j] ^= $dataSet[$i];
                }
            }
        }

        return $dataSet;
    }
}