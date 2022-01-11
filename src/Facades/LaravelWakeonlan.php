<?php

namespace Nerdmonkey\LaravelWakeonlan\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nerdmonkey\LaravelWakeonlan\LaravelWakeonlan
 */
class LaravelWakeonlan extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-wakeonlan';
    }
}
