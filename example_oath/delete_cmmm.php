<?php  

include 'dbconfig.php';

if(isset($_POST['deletedata']))
{
    $id_cmmm = $_POST['delete_id'];

    $query = "DELETE FROM comment WHERE id_comments  ='$id_cmmm'";
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

if(isset($_POST['deletedatatags']))
{
    $id_tagss = $_POST['delete_id_tagsss'];

    $query = "DELETE FROM tags WHERE id_tags  ='$id_tagss'";
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
   

