<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Page Title
    |--------------------------------------------------------------------------
    |
    | Customise the page title of your API documentation.
    |
    */
    'title' => 'API Documentation',

    /*
    |--------------------------------------------------------------------------
    | Stoplight Route
    |--------------------------------------------------------------------------
    |
    | Customise the name and url of where your API documentation will respond.
    |
    */
   'path' => [
            'development' => [
                'name' => env('STOPLIGHT_DEV_PATH_NAME', 'docs/development'),           
                'url' => env('STOPLIGHT_DEV_PATH_URL', 'api/docs/development'),
            ],
            'production' => [
                'name' => env('STOPLIGHT_PROD_PATH_NAME', 'docs/production'),           
                'url' => env('STOPLIGHT_PROD_PATH_URL', 'api/docs/production'),
            ]
    ],

  
    /*
    |--------------------------------------------------------------------------
    | OpenAPI Specification
    |--------------------------------------------------------------------------
    |
    | Provide a link to your local or cloud based open api specification.
    |
    */
      'openapi' => [
         'development' => [
                'path' => env('STOPLIGHT_DEV_OPENAPI_PATH', 'https://api.apis.guru/v2/specs/github.com/1.1.4/openapi.yaml')
            ],
            'production' => [
                 'path' => env('STOPLIGHT_PROD_OPENAPI_PATH', 'https://api.apis.guru/v2/specs/github.com/1.1.4/openapi.yaml')
            ],
    ],


    'config' => [
        /*
        |--------------------------------------------------------------------------
        | Router Mode
        |--------------------------------------------------------------------------
        |
        | Determines how navigation should work.
        |
        | Supported: "hash", "history", "memory"
        |
        | Hash: Uses the hash portion of the URL (i.e. window.location.hash) to keep the UI in sync with the URL.
        | History: Uses the HTML5 history API to keep the UI in sync with the URL.
        | Memory: Keeps the history of your “URL” in memory (does not read or write to the address bar)
        |
        */
        'router' => "hash",

        /*
        |--------------------------------------------------------------------------
        | Layout
        |--------------------------------------------------------------------------
        |
        | There are two layouts for Elements.
        |
        | Supported: "sidebar", "stacked"
        |
        | Sidebar: Three-column design.
        | Stacked: Everything in a single column, making integrations with
        |          existing websites that have their own sidebar or other columns already.
        |
        */
        'layout' => "sidebar",
    ]
];
