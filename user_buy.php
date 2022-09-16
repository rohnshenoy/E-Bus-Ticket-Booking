<?php

include 'conn.php';
session_start();

if(isset($_POST['done'])){

    $uid=$_POST['u_name'];
    $uage=$_POST['u_age'];
    $uaddress=$_POST['u_address'];
    $useat=$_POST['u_seats'];

    $bus_id=$_GET['bus_id'];
    $from = $_GET['from'];
    $to = $_GET['to'];
    $date = $_GET['date'];
    $id = $_GET['id'];
    $totalseats = $_GET['seat_no'];

    $login_id = $_SESSION['login_id'];
    

    $_SESSION['bus_id'] = $bus_id;
    $_SESSION['from'] = $from;
    $_SESSION['to'] = $to;
    $_SESSION['date'] = $date;
    $_SESSION['useats'] = $useat;

    $_SESSION['u_name'] = $uid;
    $_SESSION['u_address'] = $uaddress;
    $_SESSION['u_age'] = $uage;




    
    
     if ($useat > $totalseats )
    {
        ?>
        <script >  
                function fun() {  
                alert ("Entered number of seats is greater than available seats.");  
                }  
              </script>  

<?php
    }
    else if($totalseats > 0){
    $totalseats = $totalseats - $useat;
    $q="INSERT INTO `user_details`(`user_name`, `age`, `address`, `seats_rqrd`,`bus_id`) VALUES ('$uid','$uage','$uaddress','$useat','$bus_id')";
    $query1=mysqli_query($con,$q);
    $q2="UPDATE `add_bus` SET `seat_no`='$totalseats' WHERE id ='$id'"; 
    $query2=mysqli_query($con,$q2);
    header("location:pdf.php");
    }

    
    else{
    ?>
                <script >  
                        function fun() {  
                        alert ("Sorry, seats are already full.");  
                        }  
                      </script>  

<?php
    }
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
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
    <div class="col-lg-6 m-auto">

        <form method="post">

            <br><br><div class="card">

                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Please enter your details : 
                    </h1>
                </div>

                <label> Enter your name : </label>
                <input type="text" name="u_name" class="form-control" required><br>

                <label> Age : </label>
                <input type="text" name="u_age" class="form-control" required><br>

                <label>Address : </label>
                <input type="text" name="u_address" class="form-control" required><br>

                <label>Number of seats required : </label>
                <input type="number" name="u_seats" class="form-control" required><br>


                <button class="btn btn-success" type="submit" name="done" onclick="fun()">Buy</button><br>


            </div>

        </form>
        
        <form action="user.php" method="get">
        <br><br><button class="btn btn-primary" type="submit">Back</button>
        </form>

    </div>
</body>
</html>