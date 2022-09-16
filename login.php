<?php

session_start();

// declaring host, user, password, db
$host="localhost";
$user="root";
$password="";
$db="user";

// connecting php to mysql database
$data = mysqli_connect($host, $user,$password, $db);

// checking if our database is connected or not
if($data === false)
{
    die("connection error");
}

// condition for user and admin login 
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql="select * from login where username = '".$username."' AND password = '".$password."'";

    $result = mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="user"){
        $_SESSION["username"]=$username;
        $_SESSION["password"]=$password;
        header("location:user.php");
    }

    elseif($row["usertype"]=="admin"){
        $_SESSION["username"]=$username;
        header("location:admin.php");
    }

    else{
        echo "username or password incorrect";
    }
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
</head>
<body>
    <center>
        <h1>Login Form</h1>
    <br><br><br><br>
    <div style="background-color:grey;width:500px">
    <br><br>
    <form action="#" method="POST">
    <div>
        <label>username</label>
        <input type="text" name="username" required>

    </div>
    <br><br>

    <div>
        <label>password</label>
        <input type="password" name="password" required>

    </div>
    <br><br>


    <div>
        
        <input type="submit" value="Login" >

    </div>
    <br><br>
    </form>
    </div>
    <a href="register_user.php">New user ? Register here.</a>
    </center>
</body>
</html>