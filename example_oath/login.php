<?php
    require_once 'vendor/autoload.php';

    $clientID = '1020974900287-7bc435ml7nvho6c3stj2nm6hqavqfvr8.apps.googleusercontent.com';
    $clientSecret = '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';
    $redireUrl = 'http://localhost/example_oath/login.php';

    $client = new Google_client();
    $client->setClientID($clientID);
    $client->setClientSecret($clientSecret);
    $client->setRedirectUri($redireUrl);
    $client->addScope('profile');
    $client->addScope('email');

    if(isset($_GET['code'])){
        $token =  $client->fetchAccessTokenWithAuthCode($_GET['code']);
        print_r($token);
        $client->setAccessToken($token);
        
        $oauth = new Google_Service_OAuth2($client);
        $google_info = $oauth->userinfo->get();
        print_r($google_info);
        $email = $google_info->email;
        $name = $google_info->name;
        echo "welcome " .$name." email :  ". $email;
    }
    else{
        echo "<a href ='" . $client->createAuthUrl()."'>Login with google </a> ";
    }