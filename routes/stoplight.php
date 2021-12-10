<?php

use Illuminate\Support\Facades\Route;

Route::view(
    config('stoplight.development.path.url'),
    'stoplight::development-docs',
)->name(
    config('stoplight.development.path.name')
);

Route::view(
    config('stoplight.production.path.url'),
    'stoplight::production-docs',
)->name(
    config('stoplight.production.path.name')
);
