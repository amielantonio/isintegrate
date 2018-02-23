<?php


function index(){

    return view( 'admin/warranty/warranty' );
}

function show( $resource ){

    $warranty = get( 'warranties', $resource );

    return view( 'admin/warranty/view_warranty', compact( 'warranty' ) );

}

function create(){

    return view( 'admin/warranty/add_warranty' );

}

function store(){

    $data = [

        'product_id' => $_POST['product_id'],
        'warranty_duration' => $_POST['warranty_duration'],
        'created_at' => date( 'Y-m-d H:i:s' ),
        'updated_at' => date( 'Y-m=d H:i:s' )

    ];

    insert( 'warranties', $data );

    redirect( route( 'warranty' ) );
}

function edit( $resource ){

    $warranty = get( 'warranty', $resource );

    return view( 'admin/warranty/add_warranty', $warranty );
}

function update( $resource ){

    $data = [

        'product_id' => $_POST['product_id'],
        'warranty_duration' => $_POST['warranty_duration'],
        'created_at' => date( 'Y-m-d H:i:s' ),
        'updated_at' => date( 'Y-m=d H:i:s' )

    ];

    patch( 'warranties', $resource, $data );
}

/**
 * Delete the resource
 *
 * @param $resource
 * @return bool
 */
function destroy( $resource ){

    return delete('warranties',$resource );

}