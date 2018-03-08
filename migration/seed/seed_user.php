<?php


$Seed[ 'users' ] = [

    'username'          => 'admin',
    'firstname'         => 'Paula',
    'middlename'        => '',
    'lastname'          => 'Baluyut',
    'date_of_birth'     => date( 'Y-m-d', strtotime('06/02/1995' ) ),
    'email'             => 'paulabaluyut@gmail.com',
    'contact_number'      => '09756660209',
    'created_at'        => date( 'Y-m-d H:i:s' ),
    'updated_at'        => date( 'Y-m-d H:i:s' )

];

$Seed[ 'accounts' ] = [
    'username'          => 'admin',
    'password'          => md5('admin123' ),
    'access_level'      => 'admin',
    'created_at'        => date( 'Y-m-d H:i:s' ),
    'updated_at'        => date( 'Y-m-d H:i:s' )
];


$Seed['settings'] = [
    'sms_key'          => 'TR-PAULA747778_YNFV6',
    'phone_number'     => '',
];


$Seed['product_brands'] = [

    'brand_name'        => 'Asus',
    'is_delete'         => '0'
];


$Seed['suppliers'] = [
    'supplier_name'     => 'John Doe Electronics',
    'contact'           => 'John Doe',
    'contact_position'  => 'CEO',
    'supplier_address'  => '123 Somewhere out there',
    'contact_info'      => '09171234567',
    'email'             => 'johndoe@test.com',
    'is_delete'         => '0',
    'created_at'        => date('Y-m-d H:i:s'),
    'updated_at'        => date('Y-m-d H:i:s'),
];




/**
 * Return Seed instance
 */
return $Seed;

