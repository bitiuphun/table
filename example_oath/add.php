<?php
include 'dbconfig.php';

if(isset($_POST['deletedata']))
{
    $tags_ct = $_POST['delete_id'];

    $query = "DELETE FROM tags WHERE content ='$tags_ct'";
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