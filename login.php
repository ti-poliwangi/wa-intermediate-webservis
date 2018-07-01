<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include 'config.php';

$con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

$email = $_POST['email'];
$password = $_POST['password'];

$Sql_Query = "SELECT * from user where email = '$email' and password = '$password' ";

$check = mysqli_fetch_array(mysqli_query($con,$Sql_Query));

if(isset($check)){

echo "Data Matched";
}
else{
echo "Invalid Username or Password Please Try Again !";
}


mysqli_close($con);

?>