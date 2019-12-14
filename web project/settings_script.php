<?php
require "common.php";
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
 else {
     $oldpassword=md5($_POST['oldpassword']);
     $newpassword=md5($_POST['newpassword']);
     $retypepassword=md5($_POST['retype']);
     if($newpassword==$retypepassword)
         
     {
         $query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
         $result = mysqli_query($con, $query)or die($mysqli_error($con));
         //$select_result=mysqli_query($con,$select_query);
         $row=mysqli_fetch_array($result);
         $orgi_pass=$row['password'];
        
     
 
         
         if($orgi_pass==$oldpassword)
         {
         $query_update = "UPDATE  users SET password = '" . $newpassword . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query_update) or die($mysqli_error($con));
        header('location: settings.php?error=Password Updated');
         }
         else{
             echo "password mismatch";
         }
     }
     else{
         echo"retype password again";
     }        
 }
 ?>
             
         
     
     
 
 
 