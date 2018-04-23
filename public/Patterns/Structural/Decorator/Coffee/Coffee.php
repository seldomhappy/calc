<?php

namespace Patterns\Structural\Decorator\Coffee;

chdir(dirname(__DIR__, 5));
require 'vendor/autoload.php';

interface Coffee
{
    public function getCost();

    public function getDescription();
}

$someCoffee = new SimpleCoffee();
echo $someCoffee->getCost() . "\t" . $someCoffee->getDescription() . PHP_EOL;

$someCoffee = new MilkCoffee($someCoffee);
echo $someCoffee->getCost() . "\t" . $someCoffee->getDescription() . PHP_EOL;

$someCoffee = new WhipCoffee($someCoffee);
echo $someCoffee->getCost() . "\t" . $someCoffee->getDescription() . PHP_EOL;

$someCoffee = new VanillaCoffee($someCoffee);
echo $someCoffee->getCost() . "\t" . $someCoffee->getDescription() . PHP_EOL;

$someCoffee = new SimpleCoffee();
echo $someCoffee->getCost() . "\t" . $someCoffee->getDescription() . PHP_EOL;