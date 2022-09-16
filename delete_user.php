<?php
include "conn.php";

$id = $_GET['id'];

$q = "DELETE FROM `user_details` WHERE u_id = '$id'" ;

mysqli_query($con,$q);

header("location:user_details.php");

?>