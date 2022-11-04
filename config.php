<?php
require_once 'vendor/autoload.php';
require_once 'class-db.php';
  
define('GOOGLE_CLIENT_ID', '220393172608-dto83efd0pa3132fpu7ai2aqmm3rutfn.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
  
$config = [
    'callback' => 'http://localhost:8080/PrograOInternet/callback.php',
    'keys'     => [
                    'id' => GOOGLE_CLIENT_ID,
                    'secret' => GOOGLE_CLIENT_SECRET
                ],
    'scope'    => 'https://mail.google.com',
    'authorize_url_parameters' => [
            'approval_prompt' => 'force', // to pass only when you need to acquire a new refresh token.
            'access_type' => 'offline'
    ]
];
  
$adapter = new Hybridauth\Provider\Google( $config );