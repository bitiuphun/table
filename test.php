<?php include 'dbconfig.php';



// $data = array(
//     array(
//         "id" => 1,
//         "name" => "Bruce Wayne",
//         "city" => "Gotham",
//         "gender" => "Male"
//     ),
//     array(
//         "id" => 1,
//         "name" => "Thomas Wayne",
//         "city" => "Gotham",
//         "gender" => "Male"
//     ),
//     array(
//         "id" => 3,
//         "name" => "Diana Prince",
//         "city" => "New Mexico",
//         "gender" => "Female"
//     ),
//     array(
//         "id" => 4,
//         "name" => "Speedy Gonzales",
//         "city" => "New Mexico",
//         "gender" => "Male"
//     )
// );

// // foreach($data as $val) {
// //     if(array_key_exists('id', $val)){
// //         $result[$val['id']][] = $val;
// //     }else{
// //         $result[""][] = $val;
// //     }
// // }
// // echo "<pre>";
// // print_r($result);
// // echo "</pre>";die;


//     $result = array();
//     foreach($data as $val) {
//         if(array_key_exists('id', $val)){
//             $result[$val['id'].$val['gender']][] = $val;
//         }else{
//             $result[""][] = $val;
//         }
//     }
//     echo "<pre>";
//     print_r($result);
//     echo "</pre>";
    
   
    


// echo date('d/m/Y');
// $input = array("a" => "green", "red", "b" => "green", "blue", "red");
// $result = array_unique($input);
// print_r($result);
// if($query_run)
//                 {
//                     // $arr = [];
//                     // foreach($query_run as $row)
//                     // {
//                     //     // $arr[$row['id']][] = $row;
//                     // }  
//                     //     echo "<pre>";
//                     //     print_r($arr);
//                     //     echo "</pre>";
//                     $arr = [];
//                     while($row = mysqli_fetch_array($query_run))
//                       {
//                         $arr[$row['id']][]= $row;
//                       }
//                       echo "<pre>";
//                       print_r(array_unique($arr));
//                       echo "</pre>";
                      
// }
?>
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
      
      // $haha = date("d/m/Y" ,strtotime($row['ngaytao'] ));
      // $key = $row['id']."_".$haha;
      // if(array_key_exists($key, $result)){
      //   $result[$key]['contents']  .= ' , ' .$row['content_cm']; 
      //   $result[$key]['tagss']  .= ' , ' .$row['content']; 

      // } 
      // else{
      //   $item['id'] = $row['id'];
      //   $item['ngaytao'] = $row['ngaytao'];
      //   $item['contents'] = $row['content_cm'];
      //   $item['tagss'] = $row['content'];
      //   $result[$key] = $item;
      // }

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


