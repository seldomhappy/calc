<?php

namespace Tests\Patterns\Structural\Decorator\WebServer;

use Patterns\Structural\Decorator\WebServer;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    private $service;

    protected function setUp()
    {
        $this->service = new WebServer\WebServer('foobar');
    }

    public function testJsonDecorator()
    {
        $service = new WebServer\JsonRenderer($this->service);

        $this->assertEquals('"foobar"', $service->renderData());
    }

    public function testXmlDecorator()
    {
        $service = new WebServer\XmlRenderer($this->service);

        $this->assertXmlStringEqualsXmlString('<?xml version="1.0"?><content>foobar</content>', $service->renderData());
    }
}