<?php include('dbconfig.php'); 
// $records = array(
//   'fname' => 'msadsad',
//   'lname' => '1mdsaodjas'
// );

// if(is_array($records)){
//   foreach ($records as $row) {
//       $fieldVal1 = mysqli_real_escape_string($conn, $row[0]);
//       $fieldVal2 = mysqli_real_escape_string($conn, $row[1]);
//       $fieldVal3 = mysqli_real_escape_string($conn, $row[2]);

//       $query ="INSERT INTO programming_lang (field1, field2, field3) VALUES ( '". $fieldVal1."','".$fieldVal2."','".$fieldVal3."' )";
//       mysqli_query($conn, $query);
//   }
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="updatecode.php" method="POST">

      <textarea type="text" name ="chuanghira"></textarea>
      <button type="submit" name ="sapnghira">thêm</button>
    </form>
</body>
</html>