<?php
$con=mysqli_connect("localhost","root","","e commerce") or die(mysqli_error($con));
$name=$_POST['name'];
$name=mysqli_real_escape_string($con,$name);
$email=$_POST['email'];
$email=mysqli_real_escape_string($con,$email);
$password=md5($_POST['password']);
$password=mysqli_real_escape_string($con,$password);
$contact=$_POST['contact'];
$contact=mysqli_real_escape_string($con,$contact);
$city=$_POST['city'];
$city=  mysqli_real_escape_string($con, $city);
$address=$_POST['address'];
$addresss=mysqli_real_escape_string($con,$address);
$duplicate_mails_query="SELECT * FROM users WHERE email='$email'";
$duplicate_query=mysqli_query($con,$duplicate_mails_query);
$num=  mysqli_num_rows($duplicate_query);
if($num)
{
    echo "<h1>mail already exists</h1>";
    header('location:signup.php');
}
else{
    
    $insert_query="insert into users(name,email,password,contact,city,address) values('$name','$email','$password','$contact','$city','$address')";
     $insert_result=mysqli_query($con,$insert_query) or die(mysqli_error($con));
     echo "sucessfully resgistered";
     header('location:login.php');
}
?>