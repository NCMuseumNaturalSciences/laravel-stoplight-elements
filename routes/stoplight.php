<?php

use Illuminate\Support\Facades\Route;

Route::view(
    config('stoplight.path.development.url'),
    'stoplight::development-docs',
)->name(
    config('stoplight.path.development.name')
);

Route::view(
    config('stoplight.path.production.url'),
    'stoplight::production-docs',
)->name(
    config('stoplight.path.production.name')
);
