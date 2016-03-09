<?php defined('SYSPATH') or die('No direct script access.');

return array(
    // Sending method: smtp or mail
    'mode'  => 'smtp',

    // SMTP settings
    'smtp' => array(
        'host'      => 'smtp.gmail.com',
        'port'      => 465,
        'username'  => '',
        'password'  => '',
    ),

    // Sender
    //'to' => array(
    //    'mail' => ''
    //),
);
