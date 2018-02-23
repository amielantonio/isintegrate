<?php

/**
 * Show all resources
 *
 * @return mixed
 * @throws exception
 */
function index(){

    return view( 'admin/receivables/receivables');
}


/**
 *
 *
 * @param $resource
 * @return mixed
 * @throws exception
 */
function show( $resource ){

    $receivables = get( 'receivables', $resource );

    return view( 'admin/receivables/view_receivables', compact( 'receivables' ) );

}

/**
 * Show a form that creates a receivables
 *
 * @return mixed
 * @throws exception
 */
function create(){

    return view( 'admin/receivables/add_receivables' );

}

/**
 * Save the resources
 *
 * @return bool
 */
function store(){

    $data = [

        'receipt_number'    => $_POST[ 'receipt_number' ],
        'supplier_id'       => $_POST[ 'supplier_id' ],
        'product_id'        => $_POST[ 'product_id' ],
        'quantity'          => $_POST[ 'quantity' ],
        'amount'            => $_POST[ 'amount' ],
        'receivable_image'  => $_POST[ 'receivable_image' ],
        'date_received'     => $_POST[ 'receipt_number' ],

    ];

    return ( insert( 'receivables', $data ) ) ? true : false;

}

/**
 * Show a form that will edit the specified resource
 *
 * @param $resource
 * @return mixed
 * @throws exception
 */
function edit( $resource ){

    $receivables = get( 'receivables', $resource );

    return view( 'admin/receivables/add_receivables', compact( 'receivables' ) );

}

/**
 * Update the specified resource
 *
 * @param $resource
 * @return bool
 */
function update( $resource ){

    $data = [

        'receipt_number'    => $_POST[ 'receipt_number' ],
        'supplier_id'       => $_POST[ 'supplier_id' ],
        'product_id'        => $_POST[ 'product_id' ],
        'quantity'          => $_POST[ 'quantity' ],
        'amount'            => $_POST[ 'amount' ],
        'receivable_image'  => $_POST[ 'receivable_image' ],
        'date_received'     => $_POST[ 'receipt_number' ],

    ];

    $result = patch( 'receivables', $resource, $data );

    if( !$result ){
        return false;
    }

    return true;

}


/**
 * Destroy the specified resource
 *
 * @param $resource
 * @return bool
 */
function destroy( $resource ){

    return delete( 'receivables', $resource) ? true : false;

}