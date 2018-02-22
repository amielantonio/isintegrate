<?php

/**
 * Show all resources
 *
 * @return mixed
 * @throws exception
 */
function index(){

    $products = allWithoutTrash( 'products' );

    return view( 'admin/product/product', compact( 'products' ) );
}

function show( $resource ){


    $product = get( 'products', $resource );

    return view( 'admin/product/view_product', compact( 'product' ) );
}

/**
 * Return Product creation form
 *
 * @return mixed
 * @throws exception
 */
function create(){

    return view('admin/product/add_product' );
}


/**
 * Returns a form for editing the specified resources
 *
 * @param $resource
 * @return mixed
 */
function edit( $resource ){

    $product = get( 'products', $resource );

    return view( '', compact( 'product' ));
}

/**
 * Store product information
 *
 * @return bool
 */
function store(){
    $image = "";

    $data = [


        "product_name"          => $_POST['product_name'],
        "product_description"   => $_POST['product_description'],
        "product_brand"         => $_POST['product_brand'],
        "product_image"         => $image,
        "sku"                   => $_POST['sku'],
        "product_type"          => $_POST['product_type'],
        "created_at"            => date( 'Y-m-d H:i:s' ),
        "updated_at"            => date( 'Y-m-d H:i:s' ),


    ];

    $result = insert( 'products', $data );

    if(!$result){

        return false;

    }

    return true;
}


/**
 * Update a specific resource
 *
 * @param $resource
 * @return bool
 */
function update( $resource ){

    if( $resource == "" ){
        redirect( route('product' ) );
    }


    $image = "";
    $data = [


        "product_name"          => $_POST['product_name'],
        "product_description"   => $_POST['product_description'],
        "product_brand"         => $_POST['product_brand'],
        "product_image"         => $image,
        "sku"                   => $_POST['sku'],
        "product_type"          => $_POST['product_type'],
        "updated_at"            => date( 'Y-m-d H:i:s' ),


    ];

    $result = patch( 'products', $resource, $data );

    if( !$result ){
        return false;
    }

    return true;

}

/**
 * Soft Deletes the specified resource
 *
 * @param $resource
 * @return bool
 */
function destroy( $resource ){

    if( $resource == "" ){
        redirect( route( 'product' ) );
    }


    $result = softDelete( 'products', $resource );

    if( !$result ){

        return false;

    }

    return true;
}