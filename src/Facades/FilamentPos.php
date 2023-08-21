<?php

namespace Sahapranta\FilamentPos\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sahapranta\FilamentPos\FilamentPos
 */
class FilamentPos extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sahapranta\FilamentPos\FilamentPos::class;
    }
}
