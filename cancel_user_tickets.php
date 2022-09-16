<?php
include "conn.php";

$username = $_GET['username'];

$q = "DELETE FROM `user_details` WHERE user_name = '$username'" ;

mysqli_query($con,$q);

header("location:my_tickets.php");

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
    
</body>
</html>