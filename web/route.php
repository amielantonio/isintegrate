<?php

/**
 * Web application Router. This is where all protocols will be located
 */


/**
 * Route for running migrations
 *  WARNING: do not delete
 */
$Route['run_migrate'] = [
    'endpoint' => 'migration',
    'view' => 'migration'
];
/** WARNING: do not delete migration routes */





$Route['/'] = [
    'endpoint' => 'admin',
    'view' => 'dashboard/dashboard',
    'request' => 'dashboard/dashboard'
];

$Route['inventory'] = [
    'endpoint' => 'admin',
    'view' => 'dashboard/dashboard',
    'request' => 'dashboard/dashboard',
    'resource' => true
];

$Route['product'] = [
    'endpoint' => 'admin',
    'view' => 'dashboard/dashboard',
    'request' => 'dashboard/dashboard',
    'resource' => true
];

$Route['purchase'] = [
    'endpoint' => 'admin',
    'view' => 'dashboard/dashboard',
    'request' => 'dashboard/dashboard',
    'resource' => true
];

$Route['order'] = [
    'endpoint' => 'admin',
    'view' => 'dashboard/dashboard',
    'request' => 'dashboard/dashboard',
    'resource' => true
];

$Route['reports'] = [
    'endpoint' => 'admin',
    'view' => 'dashboard/dashboard',
    'request' => 'dashboard/dashboard',
    'resource' => true
];

$Route['warranty'] = [
    'endpoint' => 'admin',
    'view' => 'dashboard/dashboard',
    'request' => 'dashboard/dashboard',
    'resource' => true
];

$Route['user'] = [
    'endpoint' => 'admin',
    'view' => 'dashboard/dashboard',
    'request' => 'dashboard/dashboard',
    'resource' => true
];


$Route['settings'] = [
    'endpoint' => 'admin',
    'view' => 'dashboard/dashboard',
    'request' => 'dashboard/dashboard',
    'resource' => true
];



/**
 * Return the Route
 *
 * @return $Route
 */
return $Route;
