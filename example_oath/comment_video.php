<?php

require_once 'vendor/autoload.php';
session_start();

$client = new Google_Client();
$client->setAuthConfig('client_secrets.json');
// $client->setScopes('https://www.googleapis.com/auth/youtube.force-ssl');
$client->addScope(Google_Service_YouTube::YOUTUBE_FORCE_SSL);
$client->setAccessType('offline');
$client->setRedirectUri('http://localhost/example_oath/comment_video.php');
$client->setIncludeGrantedScopes(true);


if (isset($_GET['code'])) {
  // $client->authenticate($_GET['code']);
  // $_SESSION['token'] = $client->getAccessToken();
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $tokken = $client->getAccessToken($token);
  if  ( isset ( $tokken ) )  { 
    $client -> setAccessToken ($tokken) ; 
  } 
//lấy access_token từ mảng
$accessToken = $tokken['access_token'];

 print_r($tokken);

  // $curl = curl_init();

  // curl_setopt_array($curl, array(
  //   CURLOPT_URL => 'https://youtube.googleapis.com/youtube/v3/commentThreads?part=snippet',
  //   CURLOPT_RETURNTRANSFER => true,
  //   CURLOPT_ENCODING => '',
  //   CURLOPT_MAXREDIRS => 10,
  //   CURLOPT_TIMEOUT => 0,
  //   CURLOPT_FOLLOWLOCATION => true,
  //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //   CURLOPT_CUSTOMREQUEST => 'POST',
  //   CURLOPT_POSTFIELDS =>'{
  //   "snippet": {
  //     "videoId": "nlt7rx7_lrM",
  //     "topLevelComment": {
  //       "snippet": {
  //         "textOriginal": "hay quá trời!!!"
  //       }
  //     }
  //   }
  // }',
  
  //   CURLOPT_HTTPHEADER => array(
  //     "Authorization: Bearer $accessToken",
  //     'Accept: application/json',
  //     'Content-Type: application/json'
  //   ),
  // ));
  
  // $response = curl_exec($curl);
  
  // curl_close($curl);
  // echo $response;
// // Define the $commentThread object, which will be uploaded as the request body.
//   $commentThread = new Google_Service_YouTube_CommentThread();

// // Add 'snippet' object to the $commentThread object.
//   $commentThreadSnippet = new Google_Service_YouTube_CommentThreadSnippet();
//   $comment = new Google_Service_YouTube_Comment();
//   $commentSnippet = new Google_Service_YouTube_CommentSnippet();
//   $commentSnippet->setTextOriginal('This is the start of a comment thread.');
//   $comment->setSnippet($commentSnippet);
//   $commentThreadSnippet->setTopLevelComment($comment);
//   $commentThreadSnippet->setVideoId('nlt7rx7_lrM');
//   $commentThread->setSnippet($commentThreadSnippet);

// $response = $service->commentThreads->insert('snippet', $commentThread);
// print_r($response);
}
else {
  echo "<a href ='" . $client->createAuthUrl()."'>Login with google </a> ";
}