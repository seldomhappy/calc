<?php

namespace Patterns\Behavioral\Strategy;

abstract class AbstractSortStrategy implements SortStrategy
{

    public function getClassName(): string
    {
        return substr(strrchr(static::class, '\\'), 1);
    }

}