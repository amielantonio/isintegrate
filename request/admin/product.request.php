<?php

/**
 * Show all resources
 *
 * @return mixed
 * @throws exception
 */
function index(){

    return view( 'admin/product/product' );
}

/**
 * Return Product creation form
 *
 * @return mixed
 * @throws exception
 */
function create(){
    return view('admin', 'product/add_product');
}

/**
 * Store product information
 */
function store(){

}