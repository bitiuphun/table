<?php
include 'dbconfig.php';
require_once 'vendor/autoload.php';
session_start();

$client = new Google_Client();
$client->setAuthConfig('client_secrets.json');
// $client->setScopes('https://www.googleapis.com/auth/youtube.force-ssl');
$client->addScope(Google_Service_YouTube::YOUTUBE_FORCE_SSL);
$client->setAccessType('offline');
$client->setRedirectUri('http://localhost/example_oath/access_token.php');
$client->setIncludeGrantedScopes(true);


if (isset($_GET['code'])) {
  // $client->authenticate($_GET['code']);
  // $_SESSION['token'] = $client->getAccessToken();
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $tokken = $client->getAccessToken($token);

//lấy access_token từ mảng
$accessToken = $tokken['access_token'];

$oauth = new Google_Service_OAuth2($client);
$google_info = $oauth->userinfo->get();
$email = $google_info->email;
echo $email;


// $sql = "INSERT INTO users (id, email, ngaythem, status)
// VALUES (NULL,'$email', CURRENT_TIMESTAMP, 'live')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
}
else {
  echo "<a href ='" . $client->createAuthUrl()."'>Login with google </a> ";
}
?>