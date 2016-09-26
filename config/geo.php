<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Geo Driver
    |--------------------------------------------------------------------------
    |
    */

    'driver' => env('GEO_DRIVER', 'maxmind'),

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    */

    'maxmind' => [
        'db'  => env('MAXMIND_DB', __DIR__.'/../app/Modules/Geo/GeoLite2-Country.mmdb')
    ]

];
