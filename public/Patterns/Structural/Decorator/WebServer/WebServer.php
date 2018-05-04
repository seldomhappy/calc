<?php

namespace Patterns\Structural\Decorator\WebServer;

class WebServer implements RenderableInterface
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function renderData(): string
    {
        return $this->data;
    }
}
