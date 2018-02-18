<?php


/**
 * Application Migration files
 *
 * This file will contain all the table information of the
 * web application.
 */

// EXAMPLE MIGRATION
// ------------------------------------------
// $Migration['table_name'] = [
//
//    'field_name' => [
//        'field_type' => '',
//        'is_null' => '',
//        'key' => ''
//    ],
//    'field_name2' => [
//        'field_type' => '',
//        'is_null' => '',
//        'key' => ''
//    ]
//
// ];

/** Migration tables */

$Migration['migration'] = [
    'id' => [
        'field_type' => 'INT',
        'key' => 'PRIMARY KEY AUTO_INCREMENT'
    ],
    'tables' => [
        'field_type' => 'VARCHAR(100)'
    ]
];

/** end migration tables */


/**
 * Return the instance of migration
 *
 * @return $Migration
 */
return $Migration;