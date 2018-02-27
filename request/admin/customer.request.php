<?php

/**
 * @return mixed
 */
function index(){

    $customers = allWithoutTrash( 'customers' );

    return view( 'admin/customer/customer', compact( 'customers') );
}

/**
 * Show Customer information
 *
 * @param $resource
 * @return mixed
 */
function show( $resource ){

    $customer = get( '', $resource );

    return view( 'admin/customer/view_customer', $customer );

}

/**
 * Returns customer information based on the specified resource
 *
 * @param $resource
 */
function get_customer( $resource ){

    $customer = get( 'customers', $resource );

    echo json_encode( $customer );
    exit;

}

/**
 * Show form to create a customer resource
 */
function create(){

    return view( 'admin/customer/add_customer' );

}

/**
 * Save the customer resource
 */
function store(){

    $data = [

        'customer_name' => $_POST[ 'customer_name' ],
        'contact_number' => $_POST['contact_number'],
        'address' => $_POST['address'],
        'email' => $_POST['email'],
        'is_delete' => '0',
        'created_at' => date( 'Y-m-d H:i:s' ),
        'updated_at' => date( 'Y-m-d H:i:s' )

    ];

    insert( 'customers', $data );

    redirect( route( 'customer' ) );

}

/**
 * Show form to edit customer instance
 *
 * @param $resource
 * @return mixed
 */
function edit( $resource ){

    $customer = get( 'customers', $resource );

    return view( '', compact( 'customer' ));
}


/**
 * Update a customer instance
 *
 * @param $resource
 */
function update( $resource ){

    $data = [

        'customer_name' => $_POST[ 'customer_name' ],
        'contact_number' => $_POST['contact_number'],
        'address' => $_POST['address'],
        'email' => $_POST['email'],
        'is_delete' => '0',
        'created_at' => date( 'Y-m-d H:i:s' ),
        'updated_at' => date( 'Y-m-d H:i:s' )

    ];

    patch( 'customers', $resource, $data );

    redirect( route( 'customer' ) );
}


/**
 * Soft delete specified customer resource
 *
 * @param $resource
 */
function destroy( $resource ){

    softDelete( 'customers', $resource );

    redirect( route( 'customer' ) );

}