<?php

require "common.php";

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password = md5($password);
// Query checks if the email and password are present in the database.
$query = "SELECT email,id FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
if($num==0)
{
    echo "register";
    header ('location:signup.php');
}
else
{
    echo "successfully login";
    $row = mysqli_fetch_array($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_id'] = $row['id'];
    header('location:products.php');
    
}
 ?>

