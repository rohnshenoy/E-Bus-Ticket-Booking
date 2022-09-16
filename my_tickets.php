<?php
include 'conn.php';
session_start();
if(!isset($_SESSION["username"]))
{
    header("location:login.php");
}


$username = $_GET['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
      <div class="container">
        <div class="col-lg-12">
          <br><br>
          <h1 class="text-warning text-center" >My Tickets</h1>
          <br>
            <table class="table table-striped table-hover tabel-bordered">

              <tr class= "bg-dark text-white text-center">
                <th>User Id</th>
                <th>User Name</th>
                <th>Age</th>
                <th>Address </th>
                <th>Seats Booked</th>
                <th>Bus Id</th>
                <th>Date & Time </th>
                <th>Action</th>

              </tr>

              <?php

                include 'conn.php';

                $q="select * from user_details where user_name = '$username'";
                $query1=mysqli_query($con,$q);

                while($res=mysqli_fetch_array($query1)){

              ?>
              <tr class = "text-center">
                <th><?php echo $res['u_id'] ;?></th>
                <th><?php echo $res['user_name'] ;?></th>
                <th><?php echo $res['age'] ;?></th>
                <th><?php echo $res['address'] ;?></th>
                <th><?php echo $res['seats_rqrd'] ;?></th>
                <th><?php echo $res['bus_id'] ;?></th>
                <th><?php echo $res['buy_date'] ;?></th>
                <td><button class="btn-danger btn"><a href ="cancel_user_tickets.php?username=<?php echo $res['user_name']; ?>" class="text-white">cancel</a></button></td>
              </tr>

              <?php
                }
              ?>
            </table>
        </div>
        
        <form action="user.php" method="get">
        <br><br><button class="btn btn-primary" type="submit">Back</button>
        </form>
      </div>
</body>
</html>