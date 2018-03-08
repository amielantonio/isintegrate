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