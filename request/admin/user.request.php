<?php

/**
 * Show all Users
 *
 * @return mixed
 * @throws exception
 */
function index(){

    $users = rawQuerySelect( 'SELECT * FROM tbl_accounts INNER JOIN tbl_users ON tbl_accounts.username = tbl_users.username' );

    return view( 'admin/user/user', compact( 'users' ) );

}

/**
 * Return form
 *
 * @return mixed
 */
function create(){


    return view( 'admin/user/add_user' );
}

function store(){

    if( $_POST['password'] <> $_POST['password_confirmation'] ){
        redirect( route( 'user/create?message=1' ) );
    }


    $userData = [
        'username'          => $_POST['username'],
        'firstname'         => $_POST['firstname'],
        'middlename'        => $_POST['middlename'],
        'lastname'          => $_POST['lastname'],
        'email'             => $_POST['email'],
        'date_of_birth'     => date( 'Y-m-d', strtotime( $_POST['date_of_birth'] ) ),
        'contact_number'    => $_POST['contact_number'],
        'created_at'        => date( 'Y-m-d H:i:s' ),
        'updated_at'        => date( 'Y-m-d H:i:s' ),
    ];

    insert( 'users', $userData);

    $accountData = [
        'username'          => $_POST['username'],
        'password'          => md5($_POST['password']),
        'access_level'      => $_POST['access_level'],
        'created_at'        => date( 'Y-m-d H:i:s' ),
        'updated_at'        => date( 'Y-m-d H:i:s' ),
    ];

    insert( 'accounts', $accountData );


    redirect( route( 'user/create?messasge=2' ) );

}
