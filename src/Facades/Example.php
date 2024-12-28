<?php

namespace Fidel\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fidel\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Fidel\Example\Example::class;
    }
}
