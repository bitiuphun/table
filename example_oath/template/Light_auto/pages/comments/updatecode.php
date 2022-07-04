<?php
include('dbconfig.php');
// Thêm nhóm comment
    if(isset($_POST['updatedata_cm_Group']))
    {   
        $commentss_group = $_POST['add_comments_group'];
        $a = explode(PHP_EOL,$commentss_group);
        $query = "INSERT INTO comment_group	(id, ngaytao) VALUES (NULL, CURRENT_TIMESTAMP)";
        $query_run = mysqli_query($conn, $query);
        if($query_run)
        {
            $last_id = mysqli_insert_id($conn);
            // echo $last_id;
            foreach($a as $row){
                $query2 = "INSERT INTO comment(id_comment_group, content_cm) VALUES ('$last_id','$row')";
                $query_run2 = mysqli_query($conn, $query2);
            } 
            if ($query_run2){
                echo '<script> alert("Data Updated"); </script>';
                        header("Location:sss.php");
            }
            else{
                echo '<script> alert("Data Not Updated"); </script>';
            }
            echo '<script> alert("Data Updated"); </script>';
            header("Location:table_comment.php");
            
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
// Thêm comment
    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        $commentss = $_POST['add_comments'];

        $query = "INSERT INTO comment(id_comment_group , content_cm) VALUES ('$id', '$commentss')";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:table_comment.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
// Thêm tagss
    if(isset($_POST['insert_tags']))
    {   
        $id2 = $_POST['insert_id'];
        $tagss = $_POST['add_tagssss'];

        $query = "INSERT INTO tags(content , id_tags_group) VALUES ('$tagss', '$id2')";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:table_comment.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>