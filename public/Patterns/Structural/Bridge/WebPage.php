<?php

interface WebPage
{
    public function __construct(Theme $theme);

    public function getContent();
}

class About implements WebPage
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return 'About page in ' . $this->theme->getColor();
    }
}

class Careers implements WebPage
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return 'Careers page in ' . $this->theme->getColor();
    }
}


interface Theme
{
    public function getColor();
}

class DarkTheme implements Theme
{
    public function getColor()
    {
        return 'Dark Black';
    }
}

class LightTheme implements Theme
{
    public function getColor()
    {
        return 'Off white';
    }
}

class AquaTheme implements Theme
{
    public function getColor()
    {
        return 'Light blue';
    }
}

$darkTheme = new DarkTheme();
$aquaTheme = new AquaTheme();

$about = new About($darkTheme);
$careers = new Careers($aquaTheme);

echo $about->getContent() . PHP_EOL;
echo $careers->getContent() . PHP_EOL;
