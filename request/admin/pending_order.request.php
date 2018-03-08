<?php

/**
 * @return mixed
 * @throws exception
 */
function index(){


    return view( 'admin/order/pending_order' );
}


/**
 * Accepts the order as shipped
 *
 * @param $resource
 */
function shipped( $resource ){

    $data = [
        'order_status' => 'shipped',
        'date_shipped' => date( 'Y-m-d H:i:s' )
    ];


    patch( 'orders', $resource, $data );

}


/**
 * Soft deletes the specified resource
 *
 * @param $resource
 */
function trash( $resource ){

    softDelete( 'orders', $resource );

    redirect( route( 'order/pending' ) );

}

/**
 * Completely deletes the specified route
 *
 * @param $resource
 */
function destroy( $resource ){

    delete( 'orders', $resource );

    redirect( route( 'order/pending' ) );

}