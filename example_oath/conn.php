<?php 
 
include "dbconfig.php";

function encrypt($value){
    global $encryption_key;
    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options   = 0;
    $encryption_iv = '1234567891011121';
    $encryption = openssl_encrypt($value, $ciphering, $encryption_key, $options, $encryption_iv);
    return $encryption;
} 

function decrypt($value){  
    global $encryption_key;
    $ciphering = "AES-128-CTR";
    $decryption_iv = '1234567891011121';
    $options   = 0;
    $decryption = openssl_decrypt($value, $ciphering, $encryption_key, $options, $decryption_iv);
    return $decryption;
}


function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
 
//select ra top 50 ngu?i choi t?ng di?m cao nh?t
function selectLeaderboardSUM(){
    // Create connection
    global $host;
    global $username;
    global $password;
    global $database;
    $conn = new mysqli($host, $username, $password, $database);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT user.username,user.avatar,user.user_id, leaderboard.max_score FROM
                            user
                            INNER JOIN 
                            (
                                SELECT user_id, SUM(score) AS max_score
                                FROM leaderboard
                                WHERE eligible = 1
                                GROUP BY user_id  
                                
                            ) AS leaderboard
                            ON leaderboard.user_id = user.user_id
                            ORDER BY leaderboard.max_score DESC;");
    $stmt->execute();
    $result = $stmt->get_result();
    $scores = array(); 
    $avatars = array(); 
    $names = array(); 
    $alldata = array();
    while($row = $result->fetch_assoc()){
        $scores[] = $row['max_score'];
        $avatars[] = $row['avatar'] == "./icon-32.png" ? $row['avatar'] : "https://cdn.discordapp.com/avatars/".$row['user_id']."/".$row['avatar'].".png";
        $names[] = strlen($row['username']) > 16 ? $row['username'].substr($string,0,16)."..." :  $row['username'];
        // Ch? l?y 50 k?t qu? d?u ti�n
        if(count($names) >= 50)
            break;
    }
    $stmt->close();
    $conn->close();
    
    for($i = count($names); $i < 50; $i++){
        $scores[] = 0;
        $avatars[] = "./icon-32.png";
        $names[] = "-- --";

    }
    $alldata["scores"] = $scores;
    $alldata["avatars"] = $avatars;
    $alldata["names"] = $names;
  
    return $alldata;
}
 
function newPlayLeaderboard($d_id){
    // Create connection
    global $host;
    global $username;
    global $password;
    global $database;
    $playing_code = generateRandomString();
    $conn = new mysqli($host, $username, $password, $database);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // NOTE ch?ng hack
    if(getPlayTimeLeftById($d_id) <= 0)
        die("dont");
    
    $query = $conn->prepare("INSERT INTO leaderboard (user_id,ip,country,playing_code)  VALUES (?,?,?,?)");
    $query->bind_param('ssss',$d_id,get_client_ip(),get_client_country(),$playing_code);
    $query->execute();
    $query->close();
    $conn->close();

    return $playing_code;
}


function insertUsers($refresh_token){
    // Create connection
    global $host;
    global $username;
    global $password;
    global $database;
	
	$conn = new mysqli($host, $username, $password, $database);
       
    $query = $conn->prepare("INSERT INTO users(refresh_token) VALUES (?)");
    $query->bind_param('s',$refresh_token);
    $query->execute();
    $query->close();
    $conn->close();

    return $playing_code;
}


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
	  CURLOPT_POSTFIELDS => "----- -WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"code\"\r\n\r\n$CODE\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"client_id\"\r\n\r\n$client_id\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"client_secret\"\r\n\r\n$client_secret\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"redirect_uri\"\r\n\r\n$redirect_url\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"grant_type\"\r\n\r\nauthorization_code\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
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
		print_r(json_decode($response,true)["access_token"]);
	}
}
echo getUserInfo($CODE);


?>