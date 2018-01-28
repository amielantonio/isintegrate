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
    'request' => 'admin/dashboard'
];

$Route['inventory'] = [
    'endpoint' => 'admin',
    'view' => 'inventory',
    'request' => 'admin/inventory',
    'resource' => true
];

$Route['receivables'] = [
    'endpoint' => 'admin',
    'view' => 'receivables/receivables',
    'request' => 'admin/receivables',
    'resource' => true
];

$Route['product'] = [
    'endpoint' => 'admin',
    'view' => 'product/product',
    'request' => 'admin/product',
    'resource' => true
];
$Route['product_type'] = [
    'endpoint' => 'admin',
    'view' => 'product/product_type',
    'request' => 'admin/product',
    'resource' => true
];

$Route['order'] = [
    'endpoint' => 'admin',
    'view' => 'order/order',
    'request' => 'admin/order',
    'resource' => true
];

$Route['report'] = [
    'endpoint' => 'admin',
    'view' => 'report/report',
    'request' => 'admin/report',
    'resource' => true
];

$Route['warranty'] = [
    'endpoint' => 'admin',
    'view' => 'warranty/warranty',
    'request' => 'admin/dashboard',
    'resource' => true
];

$Route['supplier'] = [
    'endpoint' => 'admin',
    'view' => 'supplier/supplier',
    'request' => 'admin/supplier',
    'resource' => true
];


$Route['user'] = [
    'endpoint' => 'admin',
    'view' => 'user/user',
    'request' => 'admin/dashboard',
    'resource' => true
];





/**
 * Return the Route
 *
 * @return $Route
 */
return $Route;
