<?php

namespace Huh\Scroll;

use Illuminate\Support\Facades\Facade;

class ScrollFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'scroll';
    }
}