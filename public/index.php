<?php

chdir(dirname(__DIR__));

echo __DIR__;

require '../vendor/autoload.php';


$name = $_GET['name'] ?? 'Guest';

header('X-Developer: SeldomHappy');
echo 'Hello, ' . $name . '!';