<?php include 'dbconfig.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
    <th scope="col"> ID</th>
                                <th scope="col">comments</th>
                                <th scope="col">ngày tạo </th>
                                <th scope="col"> tags </th>

    </tr>
  </thead>
  <?php $query = "SELECT comment_group.*, comment.* ,tags.*
FROM comment_group
LEFT JOIN comment ON comment_group.id = comment.id_comment_group
LEFT JOIN tags ON comment_group.id = tags.id_tags_group
ORDER BY comment_group.id ";

$query_run = mysqli_query($conn, $query);
    $result =[];
    
    foreach ($query_run as $row) {
        $keys = $row['id'];
        $hahaha = $row['id_comments'];
        $item = [];
       if(isset($result['id'])){
        
        if(array_key_exists($hahaha, $result)){
          $result[$hahaha]['commentsss'][] = [
                                              $row['id_comments'],
                                              $row['content_cm']
                                              ];
        }} 
      else{
          $item = [
              "id" => $row['id'],
              "ngaytao" => $row['ngaytao'],
              "commentsss" => [ "id" => $row['id_comments'], $row['content_cm']]
          ];
          $result[$keys] = $item;
        }
      


    ?>
  <tbody>
                            <tr>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                            </tr>
  </tbody>
  <?php }
      
      echo "<pre>";
      print_r($result);
      echo "</pre>";
  ?>
 
</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>


