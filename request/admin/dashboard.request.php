<?php

/**
 * Show all resources
 *
 * @return mixed
 * @throws exception
 */
function index(){

    $products = where('products', 'DATEDIFF(NOW(), created_at) <= 5', 3);

//    $orders = where( 'orders', "DATEDIFF(NOW(), date_ordered) <= 5 AND order_status = 'Shipped'" );

    $orders = rawQuerySelect( 'SELECT order_id, customer_name FROM tbl_orders INNER JOIN tbl_customers ON tbl_orders.customer_id = tbl_customers.id WHERE DATEDIFF(NOW(), date_ordered) <= 5 AND order_status = "Shipped" ' );

    return view( 'admin/dashboard/dashboard', compact( 'products', 'orders' ));
}