<?php

interface Coffee
{
    public function getCost();

    public function getDescription();
}

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

class MilkCoffee implements Coffee
{
    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost(): float
    {
        return $this->coffee->getCost() + 2;
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . ', milk';
    }
}

class WhipCoffee implements Coffee
{
    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost(): float
    {
        return $this->coffee->getCost() + 5;
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . ', whip';
    }
}

class VanillaCoffee implements Coffee
{
    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost(): float
    {
        return $this->coffee->getCost() + 3;
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . ', vanilla';
    }
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