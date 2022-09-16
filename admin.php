
<?php
session_start();
if(!isset($_SESSION['username']))
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
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<center>
 <div class ="col-sm-12 text-center">
<br>
 <h3>View Available Busses : </h3>
    
    <form action="admin_view_bus.php" method="get">
        <button class="btn btn-primary btn-md" type="submit">View Bus</button>
    </form>

    <br>
    <h3>Add, Update, Remove Busses : </h3>
    <form action="add_bus.php" method="get">
        <button class="btn btn-danger btn-md" type="submit">Add Bus</button>
    </form>

    <form action="remove_bus.php" method = "get">
        <br><button class="btn btn-danger btn-md" type="submit">Delete Bus</button>
    </form>

    <form action="update_bus.php" method="get">
        <br><button class="btn btn-danger btn-md" type="submit">Update Bus</button>
    </form>

    <br>
    <h3>See Users : </h3>
    <form action="user_details.php" method="get">
        <button class="btn btn-danger btn-md" type="submit">User Details</button>
    </form>

    <br>
    <h3>Admin Activities : </h3>
    <form action="admin_log.php" method="get">
        <button class="btn btn-danger btn-md" type="submit">Admin Log</button>
    </form>

</div>
</center>
<a href="logout.php" class="btn btn-success">Logout</a>

</body>
</html>