<?php

namespace Patterns\Structural\Adapter;

class Hunter
{
    public function hunt(Lion $lion)
    {
        $lion->roar();
    }
}