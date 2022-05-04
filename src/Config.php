<?php

namespace miralsoft\weclapp\api;

class Config
{
    /** @var string The URI to the API */
    public static $URI = env('WECLAPP_BASE_URL');

    /** @var string The Token for connection */
    public static $TOKEN = env('WECLAPP_API_KEY');
}
