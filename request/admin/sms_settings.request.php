<?php

/**
 * Show the landing page for the settings
 *
 * @return mixed
 * @throws exception
 */
function index(){
    $settings = where( 'settings', "id = 1");
    return view( 'admin/settings/sms_settings' , compact( 'settings' ));
}
/**
 * Store or updates the settings of the Web application
 *
 * @return bool
 */
function store(){
    $data = [
        'sms_key' => $_POST['sms_key'],
        'phone_number' => $_POST['phone_number'],
    ];
    updateOrCreate( 'settings', $data, "id = 1" );
    redirect( route( 'settings/sms-settings' ) );
    return true;
}