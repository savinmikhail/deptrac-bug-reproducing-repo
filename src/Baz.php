<?php

namespace SavinMikhail\Deptrac;

use SavinMikhail\Deptrac\Config\Bar;

class Baz
{
    public function baz()
    {
        echo Bar::class;
    }
}