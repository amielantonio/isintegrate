<?php

/**
 * Web application Router. This is where all protocols will be located
 */


/**
 *  WARNING: do not delete
 *
 * Route Keys
 * - view: Returns a GET request for the view
 * - request: Returns a request controller
 * - action: Define an action for the request, if not defined. push index()
 * - action => resource: defines the Request URI to handle HTTP methods.
 * - middleware: An intermediary security between a route and a request
 */
$Route['run_migrate'] = [
    'view' => 'migration'
];
/** WARNING: do not delete migration routes */





$Route['/'] = [
    'request' => 'admin/dashboard'
];

$Route['inventory'] = [
    'request' => 'admin/inventory',
    'action' => 'resource'
];

$Route['receivables'] = [
    'request' => 'admin/receivables',
    'action' => 'resource'
];

//PRODUCTS
$Route['product'] = [
    'request' => 'admin/product',
    'action' => 'resource'
];
$Route['product/trash'] = [
    'request' => 'admin/product',
    'action' => 'deleted'
];

$Route['product/products'] = [
    'request' => 'admin/product',
    'action' => 'products'
];

$Route['product/{resource}/get'] = [
    'request'=> 'admin/product',
    'action' => 'get_product'
];

$Route['product/brands'] = [
    'request' => 'admin/brand',
    'action' => 'resource'
];

$Route['product/type'] = [
    'request' => 'admin/product_type',
    'action' => 'resource'
];

//END PRODUCTS

//ORDER
$Route['order'] = [
    'request' => 'admin/order',
    'action' => 'resource'
];

$Route['order/pending'] = [
    'request' => 'admin/pending_order',
    'action' => 'resource'
];
//END ORDER

$Route['report'] = [
    'request' => 'admin/report',
    'action' => 'resource'
];

$Route['warranty'] = [
    'request' => 'admin/warranty',
    'action' => 'resource'
];

$Route['supplier'] = [
    'request' => 'admin/supplier',
    'action' => 'resource'
];


$Route['user'] = [
    'request' => 'admin/user',
    'action' => 'resource'
];





/**
 * Return the Route
 *
 * @return $Route
 */
return $Route;
