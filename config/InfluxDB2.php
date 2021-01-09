<?php

return [
    'host' => env('INFLUXDB2_HOST', 'localhost'),
    'port' => env('INFLUXDB2_PORT', 8086),
    'token' => env('INFLUXDB2_TOKEN', ''),
    'bucket' => env('INFLUXDB2_BUCKET', ''),
    'organisation' => env('INFLUXDB2_ORGANISATION', false)
    
];
