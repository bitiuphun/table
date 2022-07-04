<?php
include "dbconfig.php";
require_once 'vendor/autoload.php';
session_start();

$client_id = '1020974900287-7bc435ml7nvho6c3stj2nm6hqavqfvr8.apps.googleusercontent.com';
$client_secret = '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';
$redirect_url = 'http://localhost/example_oath/getinfo.php';


function getUserInfo($CODE)
{
    global $client_id;
    global $client_secret;
    global $redirect_url;
	$curl = curl_init();
	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://oauth2.googleapis.com/token",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"code\"\r\n\r\n$CODE\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"client_id\"\r\n\r\n$client_id\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"client_secret\"\r\n\r\n$client_secret\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"redirect_uri\"\r\n\r\n$redirect_url\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"grant_type\"\r\n\r\nauthorization_code\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
	  CURLOPT_HTTPHEADER => array(
		"cache-control: no-cache",
		"content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
		"postman-token: e185a59f-67a7-2570-5da2-d8be5eedab72"
	  ),
	));


	$response = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);

	if ($err) {
	  return false;
	} else {
		return json_decode($response,true);
		echo "<hr>";
		print_r(json_decode($response,true)["access_token"]);
	}
}


	



$client = new Google_client();
$client->setAuthConfig('client_secrets.json');
// $client->setScopes('https://www.googleapis.com/auth/youtube.force-ssl');
$client->addScope(Google_Service_YouTube::YOUTUBE_FORCE_SSL);
$client->setAccessType('offline');
$client->setRedirectUri('http://localhost/example_oath/getinfo.php');
$client->addScope('email');

if(isset($_GET['code'])){
  $CODE = ($_GET["code"]);
  $user_info = getUserInfo($CODE);
  print_r($user_info);
  

  echo "<hr>";
  $refresh_token = $user_info['refresh_token'];
  echo "<hr>";
  $accessToken = $user_info['access_token'];
	echo "<hr>";
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.googleapis.com/oauth2/v3/userinfo?access_token=".$accessToken,
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
$email=json_decode($response,true)['email']; 

echo $email;

// 	global $host;
//     global $username;
//     global $password;
//     global $database;

// // Create connection
// $conn = new mysqli($host, $username, $password, $database);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// prepare and bind
// $stmt = $conn->prepare("INSERT INTO users (email, refresh_token) VALUES (?, ?)");
// $stmt->bind_param("ss", $email, $refresh_token);
// $stmt->execute();
// $stmt->close();
// $conn->close();






  
  
$sql = "INSERT INTO users (email, refresh_token)
VALUES ('$email', '$refresh_token')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  

}
else{
  echo "<a href ='" . $client->createAuthUrl()."'>Login with google </a> ";
}


