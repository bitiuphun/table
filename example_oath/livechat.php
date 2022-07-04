<?php

require_once 'vendor/autoload.php';
session_start();

$client = new Google_Client();
$client->setAuthConfig('client_secrets.json');
$client->setScopes('https://www.googleapis.com/auth/youtube.force-ssl');
$client->setAccessType('offline');
$client->setRedirectUri('http://localhost/example_oath/livechat.php');



if (isset($_GET['code'])) {
  // $client->authenticate($_GET['code']);
  // $_SESSION['token'] = $client->getAccessToken();
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $tokken = $client->getAccessToken($token);
  if  ( isset ( $tokken ) )  { 
    $client -> setAccessToken ($tokken) ; 
  } 
$accessToken = $tokken['access_token'];
$service = new Google_Service_YouTube($client); 

// Lấy id livechat

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.googleapis.com/youtube/v3/videos?id=DF9_jythAqw&key=AIzaSyBuQycMSTgVBX3ftjhX67zYA8ulg_IGe8Y%20%20%20%20%20%20%20%20%20%20%20&part=liveStreamingDetails',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);
curl_close($curl);

// var_dump($response);
// //lấy giá trị bằng đối tượng 
// $toppings = json_decode($response);
// print_r($toppings);
// echo"<hr>";
// print_r($toppings->items[0]->liveStreamingDetails->activeLiveChatId);

//lấy giá trị activeLiveChatId bằng mảng 
$haha = json_decode($response,true);
$livechatID = $haha['items'][0]['liveStreamingDetails']['activeLiveChatId'];
echo"<hr>";
// post livechat

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://youtube.googleapis.com/youtube/v3/liveChat/messages?part=snippet',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>"{
  'snippet': {
    'liveChatId': '$livechatID',
    'type': 'textMessageEvent',
    'textMessageDetails': {
      'messageText': 'nice!'
    }   
  }
}",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer $accessToken",
    'Accept: application/json',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

}

else {
  echo "<a href ='" . $client->createAuthUrl()."'>Login with google </a> ";
}