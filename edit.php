<!DOCTYPE html>
<html>

<head>
    <title>
        CRUD OPERATIONS IN FORM MYSQL
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: myFirstFont;
        }

        input {
            width: 50%;
            padding: 6px 1px;
            margin: 3px 0;
            box-sizing: border-box;
            border: 2px solid green;
            border-radius: 4px;
        }

        input:focus {
            background-color: rgb(216, 250, 150);
        }

        .container {
            margin: auto;
            border-radius: 10px;
            background-color: rgb(143, 245, 245);
            padding: 10px;
            width: 500px;
        }

        .col-label {
            float: left;
            width: 50%;
            padding: 5px 1px;
            margin: 2px 0;
            box-sizing: border-box;
            border: 2px solid green;
            border-radius: 4px;
        }

        select {
            width: 50%;
            padding: 6px 1px;
            margin: 3px 0;
            box-sizing: border-box;
            border: 2px solid green;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <center>
        <h1 style="align-self: center;">Edit a user</h1>
    </center>
    
    <div class="container" id="form_main">

    <?php
  
        $conn = mysqli_connect('localhost','root','','sample');

        if(isset($_GET['edit'])){
            $edit_id = $_GET['edit'];

            $select = "SELECT * FROM user WHERE id='$edit_id'";
            $run = mysqli_query ($conn,$select);
            /* if (!$check1_res) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            } */
        
            $row_user = mysqli_fetch_array($run);

            $fname = $row_user['fname'];
            $lname = $row_user['lname'];
            $nname = $row_user['nname'];
            $email = $row_user['email'];
            $pass = $row_user['pass'];
        
        }
    ?>






        <form style="color: rgb(15, 6, 97)" ; action="" method ="post">
            <fieldset>
                <legend style="margin: auto;">Form Details</legend>
                <label class="col-label" for="fname"> First Name:</label>
                <input class="col-in" type="text" value ="<?php echo $fname; ?>" name="fname" placeholder="First Name" required>
                <br>
                <label class="col-label" for="lname">Last Name: </label>
                <input class="col-in" type="text" value ="<?php echo $lname; ?>" name="lname" placeholder="Last Name">
                <br>
                <label class="col-label" for="text">NickName if any: </label>
                <input class="col-in" type="" value ="<?php echo $nname; ?>" name="nname" alt="Text area" placeholder="Enter in Text Box">
                <br>
                <label class="col-label" for="email">Email: </label>
                <input class="col-in" type="email" value ="<?php echo $email; ?>" name="email" placeholder="abcd@xyz.com" required>
                <br>
                <label class="col-label" for="pass"> Password: </label>
                <input class="col-in" type="password" value ="<?php echo $pass; ?>" name="pass" placeholder="password" required>
                <br>
                <center><input type="submit" name="insert-btn"></center>
            </fieldset>
        </form>

        <?php

            $conn = mysqli_connect('localhost','root','','sample');


            if(isset($_POST['insert-btn'])){

                $edit_fname = $_POST['fname'];
                $edit_lname = $_POST['lname'];
                $edit_nname = $_POST['nname'];
                $edit_email = $_POST['email'];
                $edit_pass = $_POST['pass'];


                $update = "UPDATE user SET fname = '$edit_fname',lname = '$edit_lname',nname = '$edit_nname',email = '$edit_email',pass = '$edit_pass' WHERE id ='$edit_id' ";
        
                $run_update = mysqli_query($conn,$update);
                /* if($run_update === true){
                    echo "Data has been updated";
                }
                else{
                    echo "Failed, Try again";
                } */
            }

        ?>
        <a class ="btn btn-primary" href="insert.php">Register a User</a>





    </div>
</body>

</html>





