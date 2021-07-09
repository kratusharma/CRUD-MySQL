<!DOCTYPE html>
<html lang="en">
<head>
  <title>READ AND DELETE DATABASE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>


  <!-- DELETION -->
  <?php
  
    $conn = mysqli_connect('localhost','root','','sample');

    if(isset($_GET['del'])){
        $del_id = $_GET['del'];
      
      $delete = "DELETE FROM user WHERE id ='$del_id'";
      $run_delete = mysqli_query ($conn,$delete);

      /* if($run_delete === true){
        echo "Record has been deleted";
      }
      else{
        echo "Record failed to delete";
      } */
    }
  ?>
  
  


  <table class="table table-bordered"> 
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Nick Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Delete</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>


    <?php


    $conn = mysqli_connect('localhost','root','','sample');

    $select = "SELECT * FROM user";
    $run = mysqli_query ($conn,$select);

    while ($row_user = mysqli_fetch_array($run))
    {


        $id = $row_user['id'];
        $fname = $row_user['fname'];
        $lname = $row_user['lname'];
        $nname = $row_user['nname'];
        $email = $row_user['email'];
        $pass = $row_user['pass'];

 
    ?>
      <tr>
        <td><?php echo $id;?></td>
        <td><?php echo $fname;?></td>
        <td><?php echo $lname;?></td>
        <td><?php echo $nname;?></td>
        <td><?php echo $email;?></td>
        <td><?php echo $pass;?></td>
        <td><a class = "btn btn-danger" href = "read&delete.php?del=<?php echo $id;?>">Delete</a></td>
        <td><a class = "btn btn-success" href = "edit.php?edit=<?php echo $id;?>">Edit</a></td>
        
      </tr>
    <?php } ?>  
    </tbody>
  </table>
</div>

</body>
</html>
