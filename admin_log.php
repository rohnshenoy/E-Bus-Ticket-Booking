<?php
include 'conn.php';
session_start();
if(!isset($_SESSION["username"]))
{
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin logs</title>
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
          <h1 class="text-warning text-center" >Logs</h1>
          <br>
            <table class="table table-striped table-hover tabel-bordered">

              <tr class= "bg-dark text-white text-center">
                <th>Bus Id</th>
                <th>Action</th>
                <th>Modified Date & Time</th>
              </tr>

              <?php

                include 'conn.php';

                $q="select * from admin_log";
                $query1=mysqli_query($con,$q);

                while($res=mysqli_fetch_array($query1)){

              ?>
              <tr class = "text-center">
                <th><?php echo $res['bus_id'] ;?></th>
                <th><?php echo $res['action'] ;?></th>
                <th><?php echo $res['cdate'] ;?></th>
              </tr>

              <?php
                }
              ?>
            </table>
        </div>
        
        <form action="admin.php" method="get">
        <br><br><button class="btn btn-primary" type="submit">Back</button>
        </form>
      </div>
</body>
</html>