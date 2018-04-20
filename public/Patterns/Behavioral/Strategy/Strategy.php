<?php
/**
 * Strategy
 *
 * Композиция.
 * Перемещение набора алгоритмов в отдельный тип.
 * Шаблон стратегия позволяет переключаться между алгоритмами в зависимости от ситуации.
 */

interface SortStrategy
{
    public function sort(array $dataSet): array;
}

class BubbleSortStrategy implements SortStrategy
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

class Sorter
{
    protected $sorter;

    public function __construct(SortStrategy $sorter)
    {
        $this->sorter = $sorter;
    }

    public function sort(array $dataSet): array
    {
        return $this->sorter->sort($dataSet);
    }
}

$dataSet = [1, 5, 4, 3, 2, 8, -3];
$countOfArrayElements = count($dataSet);

$sorter = ($countOfArrayElements < 99)
    ? new BubbleSortStrategy()
    : new QuickSortStrategy();

echo implode(' ', $sorter->sort($dataSet));