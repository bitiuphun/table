<?php
include 'dbconfig.php';
if(isset($_GET['deleteId'])){
    $id = $_GET['deleteId'];

    $sql = "DELETE FROM `users` where id =$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        // echo "delete successful";
        header("Location:user-table.php");
    }
    else{
        die(mysqli_error($conn));
    }
}


?>