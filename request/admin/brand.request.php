<?php

/**
 * Show all Brands
 *
 * @return mixed
 * @throws exception
 */
function index(){

    $brands = all( 'product_brands' );

    return view( 'admin/product/brand', compact( 'brands' ));
}


function store(){

    $data = [

        'brand_name' => $_POST['brand_name'],
        'is_delete' => '0'

    ];

    insert( 'product_brands', $data );

    redirect( route( 'product/brands' ) );


}

function destroy( $resource ){

}

function update( $resource ){

}

function edit( $resource ){

}