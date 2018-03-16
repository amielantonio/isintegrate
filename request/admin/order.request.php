<?php

/**
 * Show all resources
 *
 * @return mixed
 * @throws exception
 */
function index(){

//    $orders = rawQuerySelect( '
//
//    SELECT order_id, order_status, SUM(quantity) as quantity, SUM(selling_price) as selling_price, (SUM(quantity) * SUM(selling_price)) as amount, date_ordered,
//    ( SELECT DISTINCT customer_name FROM tbl_orders INNER JOIN tbl_customers WHERE tbl_customers.id = tbl_orders.customer_id LIMIT 1) as customer_name
//    FROM tbl_orders
//    GROUP BY order_id
//
//    ' );

    $orders = rawQuerySelect( '

    SELECT order_id, order_status, SUM(quantity) as quantity, SUM(selling_price) as selling_price, (SUM(quantity) * SUM(selling_price)) as amount, date_shipped
    FROM tbl_orders
    GROUP BY order_id

    ' );

    return view( 'admin/order/order', compact( 'orders' ));
}

function sales(){

    $today = date( 'Y-m-d' );

    $sales = rawQuerySelect( "
    
    SELECT order_id, (quantity * tbl_orders.selling_price) as amount, product_name, product_brand, quantity, tbl_orders.selling_price, tbl_products.unit_price FROM tbl_orders INNER JOIN tbl_products ON tbl_products.id = tbl_orders.product_id
    WHERE date_shipped = '{$today}';
    
        
    " );



    $totalSales = rawQuerySelect( "
    
        SELECT ( SUM(quantity) * SUM(tbl_orders.selling_price) ) as gross, ( SUM(quantity) * SUM(tbl_products.unit_price) ) as total_unit FROM tbl_orders INNER JOIN tbl_products ON tbl_products.id = tbl_orders.product_id
        WHERE date_shipped = '{$today}';
            
    " );

    return view( 'admin/order/sales', compact( 'sales', 'totalSales' ) );
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


    //Register
    for($x = 0; $x < count( $_POST['product_id']); $x++ ){

        //Get POST information
        $data = [

            'order_id'      => $_POST['order_id'],
            'product_id'    => $_POST['product_id'][$x],
            'quantity'      => $_POST['quantity'][$x],
            'selling_price' => $_POST['selling_price'][$x],
            'order_status'  => 'Shipped', //Default value is pending. need to approve first in the pending order page
            'date_ordered'  => date( 'Y-m-d H:i:s' , strtotime( $_POST['date_ordered'] . date( 'H:i:s' ) )),
            'date_shipped'  => date( 'Y-m-d H:i:s' )

        ];

        insert( 'orders', $data);

    }

    // Subtracts the orders to inventory

    for( $x = 0; $x < count($_POST['product_id']); $x++ ){

        $currentStock = get( 'inventory', $_POST['product_id'][$x] );

        $sData = [
            'stock' => ( $currentStock[0]['stock'] - $_POST['quantity'][$x])
        ];

        patch( 'inventory', $_POST['product_id'][$x], $sData );


        //SMS SETTINGS
        if( ( $currentStock[0]['stock'] - $_POST['quantity'][$x] ) <= $currentStock[0]['stock_limit'] && ( $currentStock[0]['stock'] - $_POST[$x]['quantity'] ) > 0 ){

            $settings = get( 'settings', 1);

            $product = get( 'products', $_POST['product_id'][$x] )[0]['product_name'];

            $message = "{$product} low on stock";

            itexmo( $settings[0]['phone_number'], $message, $settings[0]['sms_key']);

        }elseif( ( $currentStock[0]['stock'] - $_POST['quantity'][$x] ) <= 0 ){

            $settings = get( 'settings', 1);

            $product = get( 'products', $_POST['product_id'][$x] )[0]['product_name'];

            $message = "{$product} out of stock";

            itexmo( $settings[0]['phone_number'], $message, $settings[0]['sms_key']);

        }

    }

    redirect( route( 'order' ) );

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