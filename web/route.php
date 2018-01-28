<?php

/**
 * Web application Router. This is where all protocols will be located
 */


$Route['run_migrate'] = [
    'endpoint' => 'migration',
    'view' => 'migration'
];


$Route['/'] = [
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
