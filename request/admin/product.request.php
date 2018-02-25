<?php

/**
 * Show all resources
 *
 * @return mixed
 * @throws exception
 */
function index(){

    $products = allWithoutTrash( 'products' );


    return view( 'admin/product/product', compact( 'products' ) );
}

/**
 * Returns all products as json data
 */
function products(){

    $products = allWithoutTrash( 'products' );

    echo json_encode($products);
    exit;
}

function get_product( $resource ){

    $product = get( 'products', $resource );

    echo json_encode( $product );
}

/**
 * Show a specific resources
 *
 * @param $resource
 * @return mixed
 * @throws exception
 */
function show( $resource ){
    $product = get( 'products', $resource );

    return view( 'admin/product/view_product', compact( 'product' ) );
}

/**
 * Return Product creation form
 *
 * @return mixed
 * @throws exception
 */
function create(){

    $brands = allWithoutTrash('product_brands' );

    return view('admin/product/add_product', compact( 'brands' ) );
}


/**
 * Returns a form for editing the specified resources
 *
 * @param $resource
 * @return mixed
 * @throws exception
 */
function edit( $resource ){

    $brands = allWithoutTrash('product_brands' );


    $stocks = get('inventory', $resource);

    $product = get( 'products', $resource );

    return view( 'admin/product/add_product', compact( 'product', 'brands', 'stocks' ));
}

/**
 * Store product information
 *
 */
function store(){
    if( !isset( $_POST ) ) {
        redirect( route( 'product' ) );
        return false;
    }


    $image_path = asset_dir( 'img\\products\\') ;

    $data = [


        "product_name"          => $_POST['product_name'],
        "product_description"   => $_POST['product_description'],
        "product_brand"         => $_POST['product_brand'],
        "product_image"         => 'img/products/'.$_FILES['product_image']['name'],
        "sku"                   => $_POST['sku'],
        "product_type"          => $_POST['product_type'],
        "selling_price"         => $_POST['selling_price'],
        "unit_price"            => $_POST['unit_price'],
        "sale_price"            => $_POST['sale_price'],
        "created_at"            => date( 'Y-m-d H:i:s' ),
        "updated_at"            => date( 'Y-m-d H:i:s' ),


    ];


    //Check if there is an image upload error
    if(!upload_post_image( $_FILES['product_image'], $image_path )){
        redirect( route( 'product/create?message=1' ) );
    }

    //Check if there is an error
    if( !insert( 'products', $data ) ){

        redirect( route( 'product/create?message=1' ) );

    }

    //Do Stock Process

    $stock_data = [

        'product_id' => where( 'products', "sku = {$_POST['sku']}" )[0]['id'],
        'stock' => $_POST['stock'],
        'stock_limit' => $_POST['stock_limit'],
        'created_at' => date( 'Y-m-d H:i:s' ),
        'updated_at' => date( 'Y-m-d H:i:s' )

    ];

    if( !insert( 'inventory', $stock_data) ){

        redirect( route( 'product/create?message=1' ) );

    }

    redirect( route( 'product' ) );
}


/**
 * Update a specific resource
 *
 * @param $resource
 */
function update( $resource ){

    $image_path = asset_dir( 'img\\products\\') ;
    $image = 'img/products/'.$_FILES['product_image']['name'];

    $data = [

        "product_name"          => $_POST['product_name'],
        "product_description"   => $_POST['product_description'],
        "product_brand"         => $_POST['product_brand'],
        "sku"                   => $_POST['sku'],
        "product_type"          => $_POST['product_type'],
        "updated_at"            => date( 'Y-m-d H:i:s' ),


    ];

    if( ! $_FILES['product_image']['error'] == 4){
        $data['product_image'] = $image;
    }

    if(!upload_post_image( $_FILES['product_image'], $image_path )){
        redirect( route( 'product/create?message=1' ) );
    }

    if( !patch( 'products', $resource, $data ) ){
        redirect( route( 'product/create?message=1' ) );
    }

    //Do Stock Process

    $stock_data = [

        'product_id' => where( 'products', "sku = {$_POST['sku']}" )[0]['id'],
        'stock' => $_POST['stock'],
        'stock_limit' => $_POST['stock_limit'],
        'created_at' => date( 'Y-m-d H:i:s' ),
        'updated_at' => date( 'Y-m-d H:i:s' )

    ];

    if( !insert( 'inventory', $stock_data) ){

        redirect( route( 'product/create?message=1' ) );

    }

    redirect( route( "product/{$resource}/edit" ) );

}

/**
 * Soft Deletes the specified resource
 *
 * @param $resource
 */
function destroy( $resource ){

    $result = softDelete( 'products', $resource );

    if( !$result ){

        redirect( route( 'product?message=1' ) );

    }

    redirect( route( 'product' ) );
}

/**
 * @return mixed
 * @throws exception
 */
function deleted(){

    $products = trashed( 'products' );

    return view( 'admin/product/product', compact( 'products' ) );
}