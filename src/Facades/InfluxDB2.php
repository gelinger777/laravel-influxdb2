<?php

namespace GelingerMedia\InfluxDB2\Facades;

use Illuminate\Support\Facades\Facade as LaravelFacade;
use InfluxDB2\Database;

class InfluxDB2 extends LaravelFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Database::class;
    }
}