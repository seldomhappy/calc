<?php

final class Singleton
{
    private static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public function __wakeup()
    {
    }

    public static function getInstance(): Singleton
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}

$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

var_dump($singleton1, $singleton2);