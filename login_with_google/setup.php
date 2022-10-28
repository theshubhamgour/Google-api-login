<?php
    require_once('vendor/autoload.php');
    $google = new Google_Client();

    $google->setClientId('756191503610-uib2m4veppu3mkf0mpe5dmaaatn4gosm.apps.googleusercontent.com');

    $google->setClientSecret('1QoguF5guIpLVPVeLo0ZNLUy9oLr');

    $google->setRedirectUri('http://localhost/api/login_with_google/profile.php');

    $google->addScope('email');

    $google->addScope('profile');

    session_start();
?> 