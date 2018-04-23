<?php

namespace Patterns\Behavioral\Command;

chdir(dirname(__DIR__, 4));
require 'vendor/autoload.php';

class Bulb
{
    public function turnOn()
    {
        echo 'Bulb has been lit' . PHP_EOL;
    }

    public function turnOff()
    {
        echo 'Darkness!' . PHP_EOL;
    }
}

$bulb = new Bulb();

$remote = (new  RemoteControl())
    ->submit(new TurnOn($bulb))
    ->submit(new TurnOff($bulb));
