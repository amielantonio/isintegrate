<?php

/**
 * Show all resources
 *
 * @return mixed
 * @throws exception
 */
function index(){

    $orders = rawQuerySelect( '
    
    SELECT order_id, order_status, SUM(quantity) as quantity, SUM(selling_price) as selling_price, (SUM(quantity) * SUM(selling_price)) as amount, date_ordered,
    ( SELECT DISTINCT customer_name FROM tbl_orders INNER JOIN tbl_customers WHERE tbl_customers.id = tbl_orders.customer_id LIMIT 1) as customer_name
    FROM tbl_orders 
    GROUP BY order_id 
    
    ' );

    return view( 'admin/order/order', compact( 'orders' ));
}

function view_trash(){

    $orders = trashed( 'orders' );

    return view( 'admin/order/trash_order', compact( 'orders' ) );

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

    if(  !$id  ){

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

        $getID = where( 'customers', "customer_name = '{$_POST['customer_name']}' " )[0]['id'];
    }


    //Register
    for($x = 0; $x < count( $_POST['product_id']); $x++ ){

        //Get POST information
        $data = [

            'order_id'      => $_POST['order_id'],
            'customer_id'   => ( $id )? $_POST['customer_name'] : $getID,
            'product_id'    => $_POST['product_id'][$x],
            'quantity'      => $_POST['quantity'][$x],
            'selling_price' => $_POST['selling_price'][$x],
            'order_status'  => 'Pending', //Default value is pending. need to approve first in the pending order page
            'date_ordered'  => date( 'Y-m-d H:i:s' , strtotime( $_POST['date_ordered'] . date( 'H:i:s' ) )),

        ];

        insert( 'orders', $data);

    }

    redirect( route( 'order/pending' ) );

}


/**
 * Show a form to edit the specified resource
 *
 * @param $resource
 * @return mixed
 * @throws exception
 */
function edit( $resource ){

    $order = get( 'orders', $resource );

    return view( 'admin/order/add_order', compact( 'order' ) );
}

/**
 * Updates the sepcified resource
 *
 * @param $resource
 */
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