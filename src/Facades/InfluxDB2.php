<?php

namespace GelingerMedia\InfluxDB2\Facades;

use Illuminate\Support\Facades\Facade as LaravelFacade;
use InfluxDB2\Client;

class InfluxDB2 extends LaravelFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Client::class;
    }
}