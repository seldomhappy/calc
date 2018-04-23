<?php

namespace Patterns\Structural\Decorator\WebServer;

interface RenderableInterface
{
    public function renderData(): string;
}
