<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style type="text/css">
        #main{
            background-color: gray;
            width: 600px;
            height: 300px;
            border-radius: 30px;
        }

        #sub{
            width: 250px;
            height: 30px;
            background-color: beige;
            border: none;
            border-radius: 15px;
        }

        h1{
            color: white;
            background-color: black;
            border-top-right-radius: 30px;
            border-bottom-left-radius: 30px;;
        }
        .text{
            background-color: gray;
            color: white;
            width: 250px;
            font-size: 18px;
            font-family: sans-serif;
            border: none;
            text-align: center;
        }
        .text:focus{
            outline: none;
        }

        hr{
            width: 250px;
            margin-top: opx !important;
        }

      

    </style>

</head>
<body>
<center>
    <div id ="main">
    <h2>LOGIN</h2> 
 
        <form method="POST">
        <input type="text" name="username" class="text" placeholder ="username"  autocomplete="off" required><br><hr><br>
        <input type="password" name="password" class="text" placeholder="password"  required> <br><hr><br>
        <input type="submit" name="Submit" id="sub">
        

    </form>
    </div>
    </center>

</body>
</html>


<?php

  
    mysql_connect("localhost", "root","password");
    mysql_selectdb("simplelogin");
    if(isset($_POST['submit'])){

        $uname = $_POST['username'];
        $pass = $_POST['password'];
        $sql =mysql_query("select password from user where username ='$uname'");
        if($row = mysql_fetch_array($sql)){
            if($pass==$row['password']){
                header("Location: home.html");
                exit();
            }
            else
            echo "<script>alert('Invalid Password')</script>";
        }
        else
        echo "<script>alert('Invalid username')</script>";
    }

    ?>

      /*   if($uname=='username' && $pass=='password'){
            header("location:home.html");
            exit();
        }
        else
         echo "Invalid username or password provided"; */
    