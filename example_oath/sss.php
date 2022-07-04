<?php include('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP CRUD with Bootstrap Modal </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <!-- Thêm POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="addmodal_group" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="justify-content: center">
                <h5 class="modal-title" id="exampleModalLabel" style="text-align:center">Thêm comment</h5>
                </div>
                <form action="updatecode.php" method="POST">
                    <div class="modal-body">    
                    <!-- <input type="text" name="update_id_gi" id="update_id_gi"> -->
                       <h4>Thêm commemtt</h4>
                       <textarea type="text" style="width:100%; " name ="chuanghira"></textarea>
                    </div>
                    <div class="modal-footer" style="justify-content: space-evenly">
                    <button type="submit" name="updatedata_cm_Group"  style="width: 40%; background-color: #008cffc9;" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-secondary" style="width: 40% ;background-color: #ff00006e;" data-dismiss="modal">Hủy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Thêm POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="justify-content: center">
                <h5 class="modal-title" id="exampleModalLabel" style="text-align:center">Thêm comment</h5>
                </div>
                <form action="updatecode.php" method="POST">
                    <div class="modal-body">
                        <input type="text" name="update_id" id="update_id">
                        <div class="form-group">
                            <textarea name="add_comments" id="" cols="2" rows="2" style="width:100%; " placeholder="Các comment sẽ được tách bởi dấu xuống dòng"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer" style="justify-content: space-evenly">
                    <button type="submit" name="updatedata"  style="width: 40%; background-color: #008cffc9;" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-secondary" style="width: 40% ;background-color: #ff00006e;" data-dismiss="modal">Hủy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <!-- Thêm tags -->
     <div class="modal fade" id="add_tagsss" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="justify-content: center">
                <h5 class="modal-title" id="exampleModalLabel" >Thêm tags</h5>
                </div>
                <form action="updatecode.php" method="POST">
                    <div class="modal-body">
                        <input type="text" name="insert_id" id="insert_id">
                        <div class="form-group">
                            <textarea name="add_tagssss" id="" cols="2" rows="2" style="width:100%; " placeholder="Các comment sẽ được tách bởi dấu xuống dòng"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer" style="justify-content: space-evenly">
                    <button type="submit" name="insert_tags"  style="width: 40%; background-color: #008cffc9;" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-secondary" style="width: 40% ;background-color: #ff00006e;" data-dismiss="modal">Hủy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
   
<div class="modal fade" id="delData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="justify-content: center">
                <h5 class="modal-title" id="exampleModalLabel" >Thêm tags</h5>
                </div>
                <form action="delete_cmmm.php" method="POST">
                    <div class="modal-body">
                        <input type="text" name="delete_id" id="delete_id">
                        <h4> Do you want to Delete this Data ??</h4> 
                    </div>
                    <div class="modal-footer" style="justify-content: space-evenly">
                    <button type="submit" name="deletedata"  style="width: 40%; background-color: #008cffc9;" class="btn btn-primary">Xóa</button>
                        <button type="button" class="btn btn-secondary" style="width: 40% ;background-color: #ff00006e;" data-dismiss="modal">Hủy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- delete form 2 -->
    <div class="modal fade" id="del_tagsssss" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="justify-content: center">
                <h5 class="modal-title" id="exampleModalLabel" >Thêm tags</h5>
                </div>
                <form action="delete_cmmm.php" method="POST">
                    <div class="modal-body">
                        <input type="text" name="delete_id_tagsss" id="delete_id_tagsss">
                        <h4> Do you want to Delete tagsssssssss ??</h4> 
                    </div>
                    <div class="modal-footer" style="justify-content: space-evenly">
                    <button type="submit" name="deletedatatags"  style="width: 40%; background-color: #008cffc9;" class="btn btn-primary">Xóa</button>
                        <button type="button" class="btn btn-secondary" style="width: 40% ;background-color: #ff00006e;" data-dismiss="modal">Hủy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
   <!-- mmmm -->

    <div class="container">
        <div class="jumbotron">
            <div class="card">
                <h2> PHP CRUD Bootstrap MODAL (POP UP Modal) </h2>
            </div>
            <div class="card">
                <div class="card-body">
                <button type="button"  id="" class="btn btn-primary hahaha" >
                                ADD DATA
                              </button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                <?php
                $query = "SELECT comment_group.*, comment.* ,tags.*
                            FROM comment_group
                            LEFT JOIN comment ON comment_group.id = comment.id_comment_group
                            LEFT JOIN tags ON comment_group.id = tags.id_tags_group
                            ORDER BY comment_group.id ";

$query_run = mysqli_query($conn, $query);
    $result =[];
    foreach ($query_run as $row){
      $item = [];

      $key = $row['id'];
      if(array_key_exists($key, $result)){
          if($row['id_comments'] ){
            if(!array_key_exists($row['id_comments'], $result[$key]['contents'])){
            $result[$key]['contents'][$row['id_comments']]  =  [ 'comment_id' => $row['id_comments'], 'cm_content' => $row['content_cm']];
            }
          }
	      if($row['id_tags'] ){
          if(!array_key_exists( $row['id_tags'], $result[$key]['tagss'])){
		      $result[$key]['tagss'][$row['id_tags']]  =  ['tag_id' => $row['id_tags'], 'tag_content' => $row['content']];
	      }
      }
    }
      else{
        $item['id'] = $row['id'];
        $item['ngaytao'] = $row['ngaytao'];
        if($row['id_comments']) {
	        $item['contents'] = [$row['id_comments']=>[ 'comment_id' => $row['id_comments'], 'cm_content' => $row['content_cm']]];
        } else {
	        $item['contents'] = [];
        }

        if($row['id_tags']) {
	        $item['tagss']  =  [$row['id_tags']=>['tag_id' => $row['id_tags'], 'tag_content' => $row['content']]];
        } else {
          $item['tagss'] = [];
        }
        $result[$key] = $item; 
      }
      }
    // echo "<pre>"; print_r($result);
    // echo "</pre>";
 ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">comments</th>
                                <th scope="col">ngày tạo </th>
                                <th scope="col"> tags </th>

                                <th scope="col"> VIEW </th>
                                <th scope="col"> EDIT </th>
                                <th scope="col"> DELETE </th>
                            </tr>
                        </thead>
                    <tbody>
                        <?php
  foreach($result as $item){
    ?>
     <tr>
     
                              <td> <?php echo $item['id'] ?></td>
                              <td>
                              <?php 
                              $contents = "";
                            
                                foreach($item['contents'] as $key => $value) {
              
                              ?>
                          
                    
                              <div class="ngoai" style="background-color:rgba(99, 136, 99, 0.174); border: solid 1px green; width: 300px;display: flex; margin-bottom: 6px;
                         ">
                          <div class="trong"> 
                         
                               <?php  echo  '<button type="button" id='  . $value['comment_id'] . ' "  class="btn btn-danger del_data">Delete</button>' . $value['cm_content'] . " " ;
                                      
                                      echo "<br>"; ?> 
                          </div>
                        </div> 
                        <?php } ?>
                        <button type="button" class="btn btn-success addbtn"> Thêm </button> 

                      
                        
                             <!-- <button type="button" class="btn btn-success addbtn"> Thêm </button> -->
                           
                              </td>
                                <td> <?php echo date("d/m/Y" ,strtotime($item['ngaytao'] )); ?></td>
                              <td> 
                              <?php
                               $tags = "";
                               foreach($item['tagss'] as $key => $value){
                                echo  '<button type="button" id='  . $value['tag_id'] . ' "  class="btn btn-danger del_tagss">Delete</button>' . $value['tag_content'] . " " ;
                                ;
                                echo "<br>";
                               }
                            //    echo "<hr>";
                            //    echo $tags;

                               $mang_can_tach2 = explode(' ; ',$tags,-1);
                               foreach($mang_can_tach2 as $valll){
                              
                              ?>

                            <div class="ngoai" style="background-color:rgba(99, 136, 99, 0.174); border: solid 1px green; width: 300px;display: flex; margin-bottom: 6px;
                         ">
                          <div class="trong"> 
                         
                              <label class="label_time" style="margin: 6px 0">  <?php echo $valll; ?>  </label>
                          </div>
                        </div> 

                        <?php } ?>
                          <button type="button" class="btn btn-info add_tagss"> Thêm tags </button>
                             
                              </td>
                              <td>
                                
                           
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                </td>
                                <td>
                                    <!-- <button type="button" class="btn btn-danger deletebtn"> DELETE </button> -->
                                </td>
                            </tr>
    <?php
  }
?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
   

    <script>
        $(document).ready(function () {

            $('#datatableid').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "chả hiểu kiểu gi",
                }
            });

        });
    </script>

<script>
        $(document).ready(function () {
            $('.hahaha').on('click', function () {

                $('#addmodal_group').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

            });
        });
    </script>

<script>
        $(document).ready(function () {
            $('.addbtn').on('click', function () {

                $('#addmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);

            });
        });
    </script>

<script>
        $(document).ready(function () {
            $('.add_tagss').on('click', function () {

                $('#add_tagsss').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#insert_id').val(data[0]);

            });
        });
    </script>


<script>
        $(document).ready(function () {
            $('.hienthi').on('click', function () {

                $('#exampleModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);

            });
        });
</script>
<script>
        $(document).ready(function () {
            $('.hahaha').on('click', function () {

                $('#addmodal_group').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id_gi').val(data[0]);

            });
        });
    </script>
<script>
        $(document).ready(function () {

            $('.del_data').on('click', function () {

                $('#delData').modal('show');

                var del_id = $(this).attr('id');
               console.log(del_id);


                $('#delete_id').val(del_id);

            });
        });
    </script>

    
<script>
        $(document).ready(function () {

            $('.del_tagss').on('click', function () {

                $('#del_tagsssss').modal('show');

                var del_id_tags = $(this).attr('id');
               console.log(del_id_tags);


                $('#delete_id_tagsss').val(del_id_tags);

            });
        });
    </script>

   


</body>
</html>