<?php

class Computer
{
    public function getElectricShock(): void
    {
        echo 'Ouch';
    }

    public function makeSound(): void
    {
        echo 'Beep beep';
    }

    public function showLoadingScreen(): void
    {
        echo 'Loading...';
    }

    public function bam(): void
    {
        echo 'Ready to be used!';
    }

    public function closeEverything(): void
    {
        echo 'Bup bup bup buzz!';
    }

    public function sooth(): void
    {
        echo "Zzz";
    }

    public function pullCurrent(): void
    {
        echo 'Hah!';
    }
}

class ComputerFacade
{
    protected $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function turnOn(): void
    {
        $this->computer->getElectricShock();
        $this->computer->makeSound();
        $this->computer->showLoadingScreen();
        $this->computer->bam();
    }

    public function turnOff(): void
    {
        $this->computer->closeEverything();
        $this->computer->pullCurrent();
        $this->computer->sooth();
    }
}

$computer = new ComputerFacade(new Computer());
$computer->turnOn();
echo PHP_EOL;
$computer->turnOff();