
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search..</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <h1>Search here : </h1>
<div class = "card-body">
    <div class="row">
        <div class="col-md-7">
        <form action="" method="GET">
            <div class="input-group mb-3">
                <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search from, to, departure date">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
 
         </div>
     </div>
</div>
</div>



<div class="container">
    <div class="col-lg-12">
            <table class="table table-striped table-hover tabel-bordered">

              <tr class= "bg-dark text-white text-center">
                <th>Bus Id</th>
                <th>From</th>
                <th>To</th>
                <th> Departure Date </th>
                <th> Available Seats</th>
                <th> Action </th>
              </tr>


              <?php

                include 'conn.php';
                if(isset($_GET['search']))
                {
                $filtervalues = $_GET['search'];
                $query = "SELECT * FROM add_bus WHERE froms LIKE '%$filtervalues%' or tos LIKE '%$filtervalues%' or dates LIKE '%$filtervalues%' ";
                $query_run = mysqli_query($con, $query);
            
                if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $items)
                        {
                            ?>
                            <tr class = "text-center">
                                <td><?= $items['bus_id']; ?></td>
                                <td><?= $items['froms']; ?></td>
                                <td><?= $items['tos']; ?></td>
                                <td><?= $items['dates']; ?></td>
                                <td><?= $items['seat_no']; ?></td>
                                <td><button class="btn-danger btn"><a href ="user_buy.php?seat_no=<?php echo $items['seat_no']; ?>&id=<?php echo $items['id']; ?>&bus_id=<?php echo $items['bus_id']; ?>" class="text-white">Buy</a></button></td>
                            </tr>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                            <tr>
                                <td colspan="4">No Record Found</td>
                            </tr>
                        <?php
                    }
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