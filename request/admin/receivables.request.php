<?php

/**
 * Show all resources
 *
 * @return mixed
 * @throws exception
 */
function index(){

    $receivables = rawQuerySelect( '
    
    SELECT id, receipt_number, SUM(quantity) as quantity, SUM(unit_price) as unit_price, (SUM(quantity) * SUM(unit_price)) as amount, date_received,
    ( SELECT DISTINCT supplier_name FROM tbl_receivables INNER JOIN tbl_suppliers WHERE tbl_suppliers.id = tbl_receivables.supplier_id) as supplier_name
    FROM tbl_receivables 
    GROUP BY receipt_number 
    
    ' );


    return view( 'admin/receivables/receivables', compact( 'receivables' ));
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

    $products = allWithoutTrash( 'products' );

    $suppliers = allWithoutTrash( 'suppliers' );

    return view( 'admin/receivables/add_receivables', compact( 'products', 'suppliers' )) ;

}

/**
 * Save the resources
 *
 * @return bool
 */
function store(){

    // Save data to Receivables first per item
    for( $x = 0; $x < count($_POST['product_id']); $x++ ){

        $rData = [

            'receipt_number'    => $_POST['receipt_number'],
            'supplier_id'       => $_POST['supplier_id'],
            'product_id'        => $_POST['product_id'][$x],
            'date_received'     => date( 'Y-m-d', strtotime($_POST['date_received']) ),
            'quantity'          => $_POST['quantity'][$x],
            'unit_price'            => $_POST['unit_price'][$x],
            'is_delete'         => '0'


        ];

        insert( 'receivables', $rData );

    }

    //After inserting the records to receivables, update the new stocks.

    for( $x = 0; $x < count($_POST['product_id']); $x++ ){

        $currentStock = get( 'inventory', $_POST['product_id'][$x] )[0]['stock'];

        $sData = [

            'stock' => ($currentStock + $_POST['quantity'][$x]),

        ];

        patch( 'inventory', $_POST['product_id'][$x], $sData);

    }

    redirect( route( 'receivables' ) );

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
        'unit_price'        => $_POST[ 'unit_price' ],
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

    return softDelete( 'receivables', $resource) ? true : false;

}