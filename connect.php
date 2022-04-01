<?php
// The MySQLi functions allows you to access MySQL database servers.
$con = new mysqli('localhost','root','2580','crudoperation');
if(!$con)
{
    die(mysqli_error($con));
}

// if($con)
// {
//     echo "conection successfull";
// }
// else{
//     //The die() is an inbuilt function in PHP. It is used to print message and exit from the current php script. 
//     die(mysqli_error($con));
// }
// ?>