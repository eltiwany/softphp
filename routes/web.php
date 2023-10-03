<?php

use App\Controllers\HomeController;
use App\Controllers\SamplesController;

$routes = [
    '/' => [HomeController::class, 'index'],
    '/learn-more' => [HomeController::class, 'learnMore'],
    '/documentation' => [HomeController::class, 'documentation'],
    '/sample-data' => [SamplesController::class, 'viewSampleData'],
];