<?php

/**
 * @return mixed
 * @throws exception
 */
function index(){

    $orders = rawQuerySelect( '
    
    SELECT order_id, order_status, SUM(quantity) as quantity, SUM(selling_price) as selling_price, (SUM(quantity) * SUM(selling_price)) as amount, date_ordered,
    ( SELECT DISTINCT customer_name FROM tbl_orders INNER JOIN tbl_customers WHERE tbl_customers.id = tbl_orders.customer_id) as customer_name
    FROM tbl_orders
    WHERE order_status = "Pending" 
    GROUP BY order_id 
    
    ' );

    return view( 'admin/order/pending_order', compact( 'orders' ) );
}



/**
 * Accepts the order as shipped and subtracts inventory based on the product ID
 *
 * @param $resource
 */
function shipped( $resource ){

    $order = where( 'orders', "order_id = '{$resource}'" );

    //Change the Order status to Shipped
    $data = [
        'order_status' => 'Shipped',
        'date_shipped' => date( 'Y-m-d H:i:s' )
    ];


    foreach( $order as $key=>$ord ){

        $id = $ord['id'];

        patch( 'orders', $id, $data );



    }


    // Subtracts the orders to inventory

    for( $x = 0; $x < count($order); $x++ ){

        $currentStock = get( 'inventory', $order[$x]['product_id'] )[0]['stock'];

        $sData = [
            'stock' => ( $currentStock - $order[$x]['quantity'])
        ];

        patch( 'inventory', $order[$x]['product_id'], $sData );

    }


    //Check if the stocks are low.


}

function cancelled( $resource ){

    $id = where( 'orders', "order_id = '{$resource}'" )[0]['id'];

    $data = [
        'order_status' => 'Cancelled'
    ];


    patch( 'orders', $id, $data );
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