<?php

/**
 * Show all resources
 *
 * @return mixed
 * @throws exception
 */
function index(){

    $orders = rawQuerySelect( '
    
    SELECT id, receipt_number, SUM(quantity) as quantity, SUM(unit_price) as unit_price, (SUM(quantity) * SUM(unit_price)) as amount, date_received,
    ( SELECT DISTINCT supplier_name FROM tbl_receivables INNER JOIN tbl_suppliers WHERE tbl_suppliers.id = tbl_receivables.supplier_id) as supplier_name
    FROM tbl_receivables 
    GROUP BY receipt_number 
    
    ' );

    return view( 'admin/order/order', compact( 'orders' ));
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

/**
 * Store Order resources
 */
function store(){

    //Check if customer exist by checking the passed ID
    //If the customer does not exist, save the information then get the ID
    //Else, get the information
    $id = get(  'customers', $_POST['customer_name'] );
    $cData = [];

    if( empty( $id ) ){

        $cData = [

            'customer_name'     => $_POST['customer_name'],
            'contact_number'    => $_POST[ 'contact_number' ],
            'address'           => $_POST[ 'address' ],
            'email'             => $_POST[ 'email' ],
            'is_delete'         => '0',
            'created_at'        => date( 'Y-m-d H:i:s' ),
            'updated_at'        => date( 'Y-m-d H:i:s' ),

        ];


        //Insert Customer Information
        insert( 'customers', $cData );
    }


    //Register
    for($x = 0; $x < count( $_POST['product_id']); $x++ ){

        //Get POST information
        $data = [

            'order_id'      => $_POST['order_id'],
            'customer_id'   => $_POST['customer_id'],
            'product_id'    => $_POST['product_id'][$x],
            'quantity'      => $_POST['quantity'][$x],
            'selling_price' => $_POST['selling_price'][$x],
            'order_status'  => 'Pending', //Default value is pending. need to approve first in the pending order page
            'date_ordered'  => $_POST['date_ordered'],

        ];

        insert( 'orders', $data);

    }

    redirect( route( 'order/pending' ) );

}



function edit( $resource ){

    $order = get( 'orders', $resource );

    return view( 'admin/order/add_order', compact( 'order' ) );
}

function update( $resource ){


    //Register
    for($x = 0; $x < count( $_POST['product_id']); $x++ ){

        //Get POST information
        $data = [

            'order_id'      => $_POST['order_id'],
            'customer_id'   => $_POST['customer_id'],
            'product_id'    => $_POST['product_id'][$x],
            'quantity'      => $_POST['quantity'][$x],
            'selling_price' => $_POST['selling_price'][$x],
            'order_status'  => 'Pending', //Default value is pending. need to approve first in the pending order page
            'date_ordered'  => $_POST['date_ordered'],

        ];

        patch( 'orders', $resource, $data);

    }
}


/**
 * Delete resource
 *
 * @param $resource
 * @return bool
 */
function destroy( $resource ){

    return softDelete( 'orders', $resource )? true : false ;

}