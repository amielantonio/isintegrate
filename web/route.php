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
    'request' => 'admin/dashboard'
];

$Route['inventory'] = [
    'request' => 'admin/inventory',
    'resource' => true
];

$Route['receivables'] = [
    'request' => 'admin/receivables',
    'resource' => true
];

$Route['product'] = [
    'request' => 'admin/product',
    'resource' => true
];
$Route['product_type'] = [
    'request' => 'admin/product',
    'resource' => true
];

$Route['order'] = [
    'request' => 'admin/order',
    'resource' => true
];

$Route['report'] = [
    'request' => 'admin/report',
    'resource' => true
];

$Route['warranty'] = [
    'request' => 'admin/dashboard',
    'resource' => true
];

$Route['supplier'] = [
    'request' => 'admin/supplier',
    'resource' => true
];


$Route['user'] = [
    'request' => 'admin/dashboard',
    'resource' => true
];





/**
 * Return the Route
 *
 * @return $Route
 */
return $Route;
