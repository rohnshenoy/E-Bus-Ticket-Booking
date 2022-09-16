<?php


include 'conn.php';

session_start();
if(!isset($_SESSION["username"]))
{
    header("location:login.php");
}

$username = $_SESSION['username'];
$password = $_SESSION['password'];

$q2 = "SELECT `id` FROM `login` WHERE username = '$username'";
$query2=mysqli_query($con,$q2);
while($res1=mysqli_fetch_array($query2))
{
  $_SESSION['login_id'] = $res1['id'];
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <style>
  
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Bus Ticket Reservation</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="my_tickets.php?username=<?php echo $username; ?>">My tickets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        <li class="nav-item">
        <button class="btn-warning btn"><a href ="logout.php" class="text-white">Logout</a></button>
        </li> 
        </li>
      </ul>
    </div>
    <form action="search_bus.php" method="GET">
    <div class = "input-group mb-3">
        <button type="submit" class="btn btn-danger">Search for buses</button>
      </form>

    </div>
  </div>
</nav>

      <div class="container">
        <div class="col-lg-12">
          <br><br>
          <h1 class="text-warning text-center" >Buses Available</h1>
          <br>
            <table class="table table-striped table-hover tabel-bordered">

              <tr class="bg-dark text-white text-center">
                <th>Bus Id</th>
                <th>From</th>
                <th>To</th>
                <th> Departure Date </th>
                <th> Available Seats </th>
                <th> Action </th>

              </tr>

              <?php

                include 'conn.php';

                $q="select * from add_bus";
                $query1=mysqli_query($con,$q);

                while($res=mysqli_fetch_array($query1)){

              ?>
              <tr class = "text-center">
                <td><?php echo $res['bus_id'] ;?></td>
                <td><?php echo $res['froms'] ;?></td>
                <td><?php echo $res['tos'] ;?></td>
                <td><?php echo $res['dates'] ;?></td>
                <td><?php echo $res['seat_no'] ;?></td>
                <td><button class="btn-danger btn"><a href ="user_buy.php?seat_no=<?php echo $res['seat_no']; ?>&id=<?php echo $res['id']; ?>&bus_id=<?php echo $res['bus_id']; ?>&from=<?php echo $res['froms']; ?>&to=<?php echo $res['tos']; ?>&date=<?php echo $res['dates']; ?>" class="text-white">Buy</a></button></td>
              </tr>

              <?php
                }
              ?>





            </table>


        </div>
      </div>

</body>
</html>