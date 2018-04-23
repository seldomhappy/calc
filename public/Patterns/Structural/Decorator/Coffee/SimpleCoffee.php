<?php

namespace Patterns\Structural\Decorator\Coffee;

class SimpleCoffee implements Coffee
{
    public function getCost(): float
    {
        return 10;
    }

    public function getDescription(): string
    {
        return 'Simple coffee';
    }
}