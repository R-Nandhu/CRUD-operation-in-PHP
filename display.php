<?php
include "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

</head>
<body>
    <div class="container" my-5>
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
        <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Serial_No</th>
      <th scope="col">Name</th>
      <th scope="col">Emai_Id</th>
      <th scope="col">Mobile_No</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>

<?php

$sql = "select * from crud";
$result = mysqli_query($con,$sql);
if($result)
{
    // $row = mysqli_fetch_assoc($result);
    // echo $row['name'];
    // $row = mysqli_fetch_assoc($result);
    // echo $row['email'];
    while($row = mysqli_fetch_assoc($result))
    {
    $id     =  $row['id'];
    $name   =  $row['name'];
    $email  =  $row['email'];
    $mobile =  $row['mobile'];
    $password= $row['password'];
    echo '<tr>
    <td>'.$id.'</td>
    <td>'.$name.'</td>
    <td>'.$email.'</td>
    <td>'.$mobile.'</td>
    <td>'.$password.'</td>
    
    <td>
      <button class="btn btn-super"><a href="update.php?updateid='.$id.'">Update</a></button>
      <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
</td>
</tr>';
}
}
?>
 </tbody>
</table>
    
</div>    
</body>
</html>