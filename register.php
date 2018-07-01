<?php
 error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

 include 'config.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $Email = $_POST['email'];
 
 $Password = $_POST['password'];
 
 $Full_Name = $_POST['full_name'];

 $CheckSQL = "SELECT * FROM user WHERE email='$Email'";
 
 $check = mysqli_fetch_array(mysqli_query($con,$CheckSQL));
 
 if(isset($check)){

 	echo 'Email Already Exist, Please Enter Another Email.';

 }
else{ 
	$Sql_Query = "INSERT INTO user (email,password,full_name) values ('$Email','$Password','$Full_Name')";

 if(mysqli_query($con,$Sql_Query))
{
 	echo 'User Registration Successfully';
}
else
 {
 	echo 'Something went wrong';
 }
}

 mysqli_close($con);
?>