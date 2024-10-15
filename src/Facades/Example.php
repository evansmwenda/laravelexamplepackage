<?php

namespace EvansMwenda\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \EvansMwenda\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \EvansMwenda\Example\Example::class;
    }
}
