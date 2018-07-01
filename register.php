<?php 

include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name']; 

$checkEmail = "SELECT * from users where email = '$email'";
$check = mysqli_fetch_array(mysqli_query($con, $checkEmail));

if (isset($check)) {
    echo "Email has already exist";
} else {
    $query = mysqli_query($con, "INSERT into users (email, password, name) values ('$email', '$password', '$name')");

    if ($query) {
        echo "Register has been Successfully";
    } else {
        echo "Sorry, Something went wrong!";
    }
}

mysqli_close($con);