<?php
include 'dbconfig.php';

if(isset($_POST['insertdata']))
{
    $query = "INSERT INTO comment_group	(id, ngaytao) VALUES (NULL, CURRENT_TIMESTAMP)";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:sss.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}



?>