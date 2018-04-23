<?php

namespace Patterns\Behavioral\Strategy;

interface SortStrategy
{
    public function sort(array $dataSet): array;
}