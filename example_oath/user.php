<?php

include "dbconfig.php";

$CODE = $_GET["code"];
$user_info = geUtserInfo($CODE);
print_r($user_info);
if(isset($user_info["refresh_token"])){
	insertUsers($user_info["refresh_token"]);

echo "THANKKKKKKKKKKKKK";

}
