<?php

/**
 * Show all resources
 *
 * @return mixed
 * @throws exception
 */
function index(){

    $fields = [
        'tbl_products.id',
        'product_name',
        'product_image',
        'sku',
        'selling_price',
        'stock',
        'stock_limit',
        'product_type',
        'tbl_products.updated_at',
    ];

    $products = innerJoin( [ 'products', 'inventory'], $fields,['id','product_id']  );

    return view( 'admin/inventory/inventory', compact( 'products' ));
}



function show(){

}

function create(){

}

function store(){

}

function edit(){

}

function update(){

}

function destroy(){

}