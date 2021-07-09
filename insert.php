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
        <h1 style="align-self: center;">Register a User</h1>
    </center>
    <div class="container" id="form_main">
        <form style="color: rgb(15, 6, 97)" ; action="" method ="post">
            <fieldset>
                <legend style="margin: auto;">Form Details</legend>
                <label class="col-label" for="fname"> First Name:</label>
                <input class="col-in" type="text" name="fname" placeholder="First Name" required>
                <br>
                <label class="col-label" for="lname">Last Name: </label>
                <input class="col-in" type="text" name="lname" placeholder="Last Name">
                <br>
                <label class="col-label" for="text">NickName if any: </label>
                <input class="col-in" type="" name="nname" alt="Text area" placeholder="Enter in Text Box">
                <br>
                <label class="col-label" for="email">Email: </label>
                <input class="col-in" type="email" name="email" placeholder="abcd@xyz.com" required>
                <br>
                <label class="col-label" for="pass"> Password: </label>
                <input class="col-in" type="password" name="pass" placeholder="password" required>
                <br>
                <center><input type="submit" name="insert-btn"></center>
            </fieldset>
        </form>

        <?php

            $conn = mysqli_connect('localhost','root','','sample');


            if(isset($_POST['insert-btn'])){

                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $nname = $_POST['nname'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];


                $insert = "INSERT INTO user(fname,lname,nname,email,pass) VALUES('$fname','$lname','$nname','$email','$pass')";
        
                $run_insert = mysqli_query($conn,$insert);
                /* if($run_insert === true){
                    echo "Data has been inserted";
                }
                else{
                    echo "Failed, Try again";
                } */
            }

        ?>





    </div>
</body>

</html>





