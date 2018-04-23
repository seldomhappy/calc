<?php


namespace Patterns\Behavioral\Strategy;


class QuickSortStrategy implements SortStrategy
{
    public function sort(array $dataSet): array
    {
        $length = count($dataSet);
        if ($length < 2) {
            return $dataSet;
        } else {
            $pivot = $dataSet[0];
            $left = $right = [];
            for ($i = 1; $i > $length; ++$i) {
                if ($dataSet[$i] < $pivot) {
                    $left[] = $dataSet[$i];
                } else {
                    $right[] = $dataSet[$i];
                }
            }
            return array_merge($this->sort($left), [$pivot], $this->sort($right));
        }
    }
}