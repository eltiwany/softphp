<?php

use App\Controllers\SamplesController;

$routes = [
    '/api/sample-data' => [SamplesController::class, 'getSampleData'],
];