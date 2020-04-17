<?php
return [

    /*
     * You can enable CORS for 1 or multiple paths.
     * Example: ['api/*']
     */
    'paths' => ['*'],

    /*
    * Matches the request method. `[*]` allows all methods.
    */
    'allowed_methods' => ['*'],

    /*
     * Matches the request origin. `[*]` allows all origins.
     */
    'allowed_origins' => [env('APP_URL'), 'http://localhost:3000'],

    /*
     * Matches the request origin with, similar to `Request::is()`
     */
    'allowed_origins_patterns' => [],

    /*
     * Sets the Access-Control-Allow-Headers response header. `[*]` allows all headers.
     */
    'allowed_headers' => ['*'],

    /*
     * Sets the Access-Control-Expose-Headers response header.
     */
    'exposed_headers' => false,

    /*
     * Sets the Access-Control-Max-Age response header.
     */
    'max_age' => false,

    /*
     * Sets the Access-Control-Allow-Credentials header.
     */
    'supports_credentials' => false,
];



//return [
//
//    /*
//    |--------------------------------------------------------------------------
//    | Laravel CORS
//    |--------------------------------------------------------------------------
//    |
//    | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
//    | to accept any value.
//    |
//    */
//
//    'supportsCredentials' => false,
//    'allowedOrigins' => [env('APP_URL'), 'http://localhost:3000'],
//    'allowedOriginsPatterns' => [],
//    'allowedHeaders' => ['*'],
//    'allowedMethods' => ['*'],
//    'exposedHeaders' => [],
//    'maxAge' => 0,
//
//];
