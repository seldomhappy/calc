<?php

namespace Patterns\Structural\Decorator\WebServer;

class JsonRenderer extends RendererDecorator
{
    public function renderData(): string
    {
        return json_encode($this->wrapped->renderData());
    }
}