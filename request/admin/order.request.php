<?php

/**
 * Show all resources
 *
 * @return mixed
 * @throws exception
 */
function index(){

    return view( 'admin/order/order');
}

/**
 * @param $resource
 * @return mixed
 * @throws exception
 */
function show( $resource ){
    $order = get( 'orders', $resource );

    return view( 'admin/order/view_order', compact( 'order' ) );
}


/**
 * @return mixed
 * @throws exception
 */
function create(){

    $products = allWithoutTrash( 'products' );


    return view( 'admin/order/add_order', compact( 'products' ) );

}

function store(){

    $data = [

        'order_id' => $_POST[''],
        'customer_id' => $_POST[''],
        'product_id' => $_POST[''],
        'quantity' => $_POST[''],
        'amount' => $_POST[''],
        'order_status' => $_POST[''],
        'date_ordered' => $_POST[''],
        'date_shipped' => $_POST[''],

    ];

    insert( 'orders', $data);

}

function edit( $resource ){

    $order = get( 'orders', $resource );

    return view( 'admin/order/add_order', compact( 'order' ) );
}

function update( $resource ){
    $data = [

        'order_id' => $_POST[''],
        'customer_id' => $_POST[''],
        'product_id' => $_POST[''],
        'quantity' => $_POST[''],
        'amount' => $_POST[''],
        'order_status' => $_POST[''],
        'date_ordered' => $_POST[''],
        'date_shipped' => $_POST[''],

    ];

    patch( 'orders', $resource, $data );
}

function destroy( $resource ){

    return delete( 'orders', $resource )? true : false ;

}