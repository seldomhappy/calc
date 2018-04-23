<?php

namespace Patterns\Structural\Adapter;

chdir(dirname(__DIR__, 4));
require 'vendor/autoload.php';

class WildDog
{

    public function bark()
    {
    }
}

$WildDog = new WildDog();
$wildDogAdapter = new WildDogAdapter($WildDog);

$hunter = new Hunter();
$hunter->hunt($wildDogAdapter);
