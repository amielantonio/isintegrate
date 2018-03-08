<?php

/**
 * Returns all resources
 *
 * @return mixed
 * @throws exception
 */
function index(){


    $suppliers = allWithoutTrash( 'suppliers' );

    return view( 'admin/supplier/supplier', compact( 'suppliers' ) );
}

/**
 * Returns a form to create a new resource
 *
 * @return mixed
 * @throws exception
 */
function create(){

    return view( 'admin/supplier/add_supplier' );

}

/**
 * Store the created resource into the database
 *
 * @return bool
 */
function store(){

    $data = [

        'supplier_name'     => $_POST['supplier_name'],
        'contact'           => $_POST['contact'],
        'contact_position'  => $_POST['contact_position'],
        'supplier_address'  => $_POST['supplier_address'],
        'contact_info'      => $_POST['contact_info'],
        'email'             => $_POST['email'],
        'is_delete'         => '0',
        "created_at"        => date( 'Y-m-d H:i:s' ),
        "updated_at"        => date( 'Y-m-d H:i:s' ),

    ];

    $result = insert( 'suppliers', $data );

   redirect( route( 'supplier' ) );

}

/**
 * Show form to edit the specified resource
 *
 * @param $resource
 * @return mixed
 * @throws exception
 */
function edit( $resource ){

    $supplier = get( 'suppliers', $resource );

    return view( 'admin/supplier/add_supplier', compact( 'supplier' ) );

}

/**
 * Update the specified resource
 *
 * @param $resource
 * @return bool
 */
function update( $resource ){

    $data = [

        'supplier_name'     => $_POST['supplier_name'],
        'contact'           => $_POST['contact'],
        'contact_position'  => $_POST['contact_position'],
        'supplier_address'  => $_POST['supplier_address'],
        'contact_info'      => $_POST['contact_info'],
        'email'             => $_POST['email'],
        "updated_at"        => date( 'Y-m-d H:i:s' ),

    ];

    $result = patch( 'suppliers', $resource, $data);

    redirect( route("supplier/{$resource}/edit"  ) );
}

function destroy( $resource ){

    return ( softDelete( 'suppliers', $resource ) ) ? true : false;

}