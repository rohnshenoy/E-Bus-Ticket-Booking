<?php
include 'conn.php';
if(isset($_POST['done'])){
    $busid=$_POST['busid'];
    $from=$_POST['from'];
    $to=$_POST['to'];
    $seat_no=$_POST['seat_no'];
    $date=date('Y-m-d',strtotime($_POST['bus_date']));
    $q="INSERT INTO `add_bus`(`bus_id`, `froms`, `tos` , `dates`,`seat_no`) VALUES ('$busid','$from','$to','$date','$seat_no')";
    $query1=mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Bus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="col-lg-6 m-auto">

        <form method="post">

            <br><br><div class="card">

                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Add Bus</h1>
                </div>

                <label> Bus ID</label>
                <input type="text" name="busid" class="form-control" required><br>

                <label> From</label>
                <input type="text" name="from" class="form-control" required><br>

                <label>To</label>
                <input type="text" name="to" class="form-control" required><br>

                <label>Date of Departure</label>
                <input type="date" name="bus_date" class="form-control" required><br>

                <label>Add Number of Seats </label>
                <input type="number" name="seat_no" class="form-control" required><br>


                <button class="btn btn-success" type="submit" name="done">Add</button><br>


            </div>

        </form>
        
        <form action="admin.php" method="get">
        <br><br><button class="btn btn-primary" type="submit">Back</button>
        </form>

    </div>
</body>
</html>