<?php

include 'conn.php';


if (isset($_POST['done']))
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $address =$_POST["address"];
    $password =$_POST["password"];
    $cpassword =$_POST["cpassword"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];


    if ($password == $cpassword){
     $q5 = "INSERT INTO `login`(`username`, `email`, `address`, `password`, `state`, `zip`) VALUES ('$username','$email','$address','$password','$state','$zip')";
        $query1=mysqli_query($con,$q5);
        header("location:login.php");
    }
    else {
        ?>

        <script >  
                function fun() {  
                alert ("Incorrect Password");  
                }  
              </script>  

<?php

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Saurav">
<link href="css/bootstrap.min.css" rel="stylesheet">
<title>Register Here</title>
</head>

<body class="bg-light">
 <div class="container">
  <div class="py-5 text-center">
    <h2> User Registration </h2>
  </div>
 </div>
 <form action="#" method="post">
<div class="container">
  <div class="row">
    <div class="col-md-12">
     <form>
     <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" class="form-control" id="firstName" placeholder="" name="username" required>
    </div>
     
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="" name="email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Address </label>
    <input type="text" class="form-control" id="address" placeholder="" name = "address" required>
    <small class="form-text text-muted">Street Address</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="" name ="password" required>
    <small class="form-text text-muted">Enter a password</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" placeholder="" name="cpassword" required>
    <small class="form-text text-muted">Re-enter your password</small>
  </div>
  
  <div class="row">
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" id="state" name="state" >
              <option value="">Choose...</option>
              <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="number" class="form-control" id="zip" placeholder="" name="zip" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
        
          </div>
        </div>
       
</div>

    <div>
        <br>
        <input type="submit" class="btn btn-danger" value="Register" name ="done" onclick="fun()" >
    </div>
    
    
  </div>
  
  </div>
  <br><br>

  </form>
  
</body>
</html>
