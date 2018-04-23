<?php


namespace Patterns\Structural\Decorator\WebServer;


abstract class RendererDecorator
{
    protected $wrapped;

    public function __construct(RenderableInterface $renderable)
    {
        $this->wrapped = $renderable;
    }
}