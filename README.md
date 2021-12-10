# Laravel Stoplight Elements
FORK OF https://github.com/JustSteveKing/laravel-stoplight-elements

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-github-action]][link-github-action]
[![Total Downloads][ico-downloads]][link-downloads]

Easily publish your API documentation using your OpenAPI document in your Laravel Application.

## Installation

You can install this package via composer:

```bash
composer require NCMuseumOfNaturalSciences/laravel-stoplight-elements
```


## Configuration

You can publish the configuration file with:

```bash
php artisan vendor:publish --provider="NCMuseumOfNaturalSciences\Laravel\LaravelStoplight\StoplightServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
    'title' => 'API Documentation',
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

    'openapi' => [
         'development' => [
                'path' => env('STOPLIGHT_DEV_OPENAPI_PATH', 'https://api.apis.guru/v2/specs/github.com/1.1.4/openapi.yaml')
            ],
            production => [
                 'path' => env('STOPLIGHT_PROD_OPENAPI_PATH', 'https://api.apis.guru/v2/specs/github.com/1.1.4/openapi.yaml')
            ],
    ],

    'config' => [
        'router' => "hash",

        'layout' => "sidebar",
    ]
];
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.


## Credits
Updated Package
- [Ben Norton][link-author]

Original Package (https://github.com/JustSteveKing/laravel-stoplight-elements)
- [Steve McDougall][link-author]
- [All Contributors][link-contributors]
- [Stoplight Team for the Elements Web Components](https://stoplight.io/open-source/elements/)


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.


[ico-version]: https://img.shields.io/packagist/v/juststeveking/laravel-stoplight-elements.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-github-action]: https://github.com/JustSteveKing/laravel-stoplight-elements/workflows/run-tests/badge.svg?branch=main
[ico-downloads]: https://img.shields.io/packagist/dt/juststeveking/laravel-stoplight-elements.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/juststeveking/laravel-stoplight-elements
[link-github-action]: https://github.com/JustSteveKing/laravel-stoplight-elements/actions
[link-downloads]: https://packagist.org/packages/juststeveking/laravel-stoplight-elements
[link-author]: https://github.com/JustSteveKing
[link-contributors]: ../../contributors
