<?php

namespace Patterns\Behavioral\Strategy;

/**
 * Strategy
 *
 * Композиция.
 * Перемещение набора алгоритмов в отдельный тип.
 * Шаблон стратегия позволяет переключаться между алгоритмами в зависимости от ситуации.
 */

chdir(dirname(__DIR__, 4));
require 'vendor/autoload.php';

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

$sorter = $countOfArrayElements < 99
    ? new BubbleSortStrategy()
    : new QuickSortStrategy();

$start = microtime(true);
$sorter->sort($dataSet);
echo round(microtime(true) - $start, 5);
