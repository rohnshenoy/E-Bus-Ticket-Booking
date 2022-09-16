<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Bus</title>
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
          <h1 class="text-warning text-center" >Update Bus</h1>
          <br>
            <table class="table table-striped table-hover tabel-bordered">

              <tr class="bg-dark text-white text-center">
                <td>Bus Id</td>
                <td>From</td>
                <td>To</td>
                <td> Departure Date </td>
                <td> Available Seats </td>
                <td> Action </td>
                


              </tr>

              <?php
                include 'conn.php';
                $q="select * from add_bus";
                $query1=mysqli_query($con,$q);
                while($res=mysqli_fetch_array($query1)){
              ?>
              <tr class="text-center">
                <td><?php echo $res['bus_id'] ;?></td>
                <td><?php echo $res['froms'] ;?></td>
                <td><?php echo $res['tos'] ;?></td>
                <td><?php echo $res['dates'] ;?></td>
                <td><?php echo $res['seat_no'] ;?></td>
                <td><button class="btn-primary btn"><a href ="update.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a></button></td>
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