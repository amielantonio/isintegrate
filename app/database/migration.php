<?php


/**
 * Application Migration files
 *
 * This file will contain all the table information of the
 * web application.
 */


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


$Migration['inventory'] = [
    'id' => [
        'field_type' => 'INT',
        'key' => 'PRIMARY KEY AUTO_INCREMENT'
    ],
    'product_id'            => [ 'field_type' => 'INT' ],
    'stock'                 => [ 'field_type' => 'INT' ],
    'stock_limit'           => [ 'field_type' => 'INT' ],
    'created_at'            => [ 'field_type' => 'DATETIME' ],
    'updated_at'            => [ 'field_type' => 'DATETIME' ]
];

$Migration['receivables'] = [
    'id'                    => [ 'field_type' => 'INT', 'key' => 'PRIMARY KEY AUTO_INCREMENT' ],
    'receipt_number'        => [ 'field_type' => 'VARCHAR(50)' ],
    'supplier_id'           => [ 'field_type' => 'INT' ],
    'product_id'            => [ 'field_type' => 'INT' ],
    'quantity'              => [ 'field_type' => 'INT' ],
    'unit_price'            => [ 'field_type' => 'DECIMAL(10,2)' ],
    'receivable_image'      => [ 'field_type' => 'TEXT' ],
    'date_received'         => [ 'field_type' => 'DATE' ],
    'is_delete'             => [ 'field_type' => 'INT(1)' ],
];

$Migration['products'] = [
    'id'                    => [ 'field_type'  => 'INT', 'key' => 'PRIMARY KEY AUTO_INCREMENT' ],
    'product_name'          => [ 'field_type' => 'VARCHAR(100)' ],
    'product_description'   => [ 'field_type' => 'TEXT' ],
    'product_brand'         => [ 'field_type' => 'VARCHAR(50)' ],
    'product_image'         => [ 'field_type' => 'VARCHAR(100)' ],
    'sku'                   => [ 'field_type' => 'VARCHAR(100)', 'key' => 'UNIQUE' ],
    'product_type'          => [ 'field_type' => 'VARCHAR(50)' ],
    'sale_price'            => [ 'field_type' => 'DECIMAL(10,2)' ],
    'unit_price'            => [ 'field_type' => 'DECIMAL(10,2)' ],
    'selling_price'         => [ 'field_type' => 'DECIMAL(10,2)' ],
    'is_delete'             => [ 'field_type' => 'INT(1)' ],
    'created_at'            => [ 'field_type' => 'DATETIME' ],
    'updated_at'            => [ 'field_type' => 'DATETIME' ]
];

$Migration['product_brands'] = [
    'id'            => [ 'field_type'  => 'INT', 'key' => 'PRIMARY KEY AUTO_INCREMENT' ],
    'brand_name'    => [ 'field_type' => 'VARCHAR(50)', 'key' => 'UNIQUE' ],
    'is_delete'     => [ 'field_type' => 'INT(1)' ] ,

];

$Migration['orders'] = [
    'id'                    => [ 'field_type'  => 'INT', 'key' => 'PRIMARY KEY AUTO_INCREMENT' ],
    'order_id'              => [ 'field_type' => 'VARCHAR(15)' ],
    'customer_id'           => [ 'field_type' => 'INT' ],
    'product_id'            => [ 'field_type' => 'INT' ],
    'quantity'              => [ 'field_type' => 'INT' ],
    'selling_price'         => [ 'field_type' => 'DECIMAL(10,2)' ],
    'order_status'          => [ 'field_type' => 'VARCHAR(50)' ],
    'date_ordered'          => [ 'field_type' => 'DATETIME' ],
    'is_delete'             => [ 'field_type' => 'INT(1)' ],
    'date_shipped'          => [ 'field_type' => 'DATETIME' ]
];

$Migration['warranties'] = [
    'id'                    => [ 'field_type'  => 'INT', 'key' => 'PRIMARY KEY AUTO_INCREMENT' ],
    'product_id'            => [ 'field_type' => 'INT' ],
    'warranty_duration'     => [ 'field_type' => 'VARCHAR(10)' ],
    'created_at'            => [ 'field_type' => 'DATETIME' ],
    'updated_at'            => [ 'field_type' => 'DATETIME' ]
];

$Migration['suppliers'] = [
    'id'                    => [ 'field_type'  => 'INT', 'key' => 'PRIMARY KEY AUTO_INCREMENT' ],
    'supplier_name'         => [ 'field_type' => 'VARCHAR(50)' ],
    'contact'               => [ 'field_type' => 'VARCHAR(50)' ],
    'contact_position'      => [ 'field_type' => 'VARCHAR(50)' ],
    'supplier_address'      => [ 'field_type' => 'VARCHAR(100)' ],
    'contact_info'          => [ 'field_type' => 'VARCHAR(15)' ],
    'email'                 => [ 'field_type' => 'VARCHAR(50)' ],
    'is_delete'             => [ 'field_type' => 'INT(1)' ],
    'created_at'            => [ 'field_type' => 'DATETIME' ],
    'updated_at'            => [ 'field_type' => 'DATETIME' ]
];

$Migration['customers'] = [
    'id'                    => [ 'field_type'  => 'INT', 'key' => 'PRIMARY KEY AUTO_INCREMENT' ],
    'customer_name'         => [ 'field_type' => 'VARCHAR(50)' ],
    'contact_number'        => [ 'field_type' => 'VARCHAR(50)' ],
    'address'               => [ 'field_type' => 'TEXT' ],
    'email'                 => [ 'field_type' => 'VARCHAR(50)' ],
    'is_delete'             => [ 'field_type' => 'INT(1)' ],
    'created_at'            => [ 'field_type' => 'DATETIME' ],
    'updated_at'            => [ 'field_type' => 'DATETIME' ]
];

$Migration['users'] = [
    'id'                    => [ 'field_type'  => 'INT', 'key' => 'PRIMARY KEY AUTO_INCREMENT' ],
    'firstname'             => [ 'field_type' => 'VARCHAR(50)' ],
    'middlename'            => [ 'field_type' => 'VARCHAR(50)' ],
    'lastname'              => [ 'field_type' => 'VARCHAR(50)' ],
    'email'                 => [ 'field_type' => 'VARCHAR(50)' ],
    'date_of_birth'         => [ 'field_type' => 'DATE' ],
    'contact_number'        => [ 'field_type' => 'VARCHAR(50)' ],
    'created_at'            => [ 'field_type' => 'DATETIME' ],
    'updated_at'            => [ 'field_type' => 'DATETIME' ]
];

$Migration['accounts'] = [
    'id'                    => [ 'field_type'  => 'INT', 'key' => 'PRIMARY KEY AUTO_INCREMENT' ],
    'username'              => [ 'field_type' => 'VARCHAR(50)' ],
    'password'              => [ 'field_type' => 'VARCHAR(50)' ],
    'access_level'          => [ 'field_type' => 'VARCHAR(50)' ],
    'created_at'            => [ 'field_type' => 'DATETIME' ],
    'updated_at'            => [ 'field_type' => 'DATETIME' ]
];





/**
 * Return the instance of migration
 *
 * @return $Migration
 */
return $Migration;