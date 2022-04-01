<?php
include 'connect.php';
//The $_POST variable is an array of variable names and values sent by the HTTP POST method
if(isset($_POST['submit'])){
    $name      =$_POST['name'];
    $email     =$_POST['email'];
    $mobile    =$_POST['mobile'];
    $password  =$_POST['password'];

    $sql = "insert into crud(name,email,mobile,password) 
    values ('$name','$email','$mobile','$password')";
    //mysqli_query() function performs a query against a database.
    $result = mysqli_query($con,$sql);
    if ($result)
    {
        // echo "data inserted successfully";
        header('location:display.php');//it data succesfull stored in database
    }
    else
    {
        die(mysqli_error($con));
    }

}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title>CRUD</title>
  </head>
  <body>
    
  <div class="container my-5">
  <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control"
    placeholder = "Enter your name" name = "name" autocomplete="off">
    
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"
    placeholder = "Enter your email_id" name = "email" autocomplete="off">
</div>
<div class="form-group">
    <label>Mobile_No</label>
    <input type="text" class="form-control"
    placeholder = "Enter your mobile number" name = "mobile" autocomplete="off">
</div>
<div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control"
    placeholder = "Enter your password" name = "password" autocomplete="off">
</div>
  <button type="submit" class="btn btn-primary" name="submit">submit</button>
</form>
  </div>

    
  </body>
</html>


