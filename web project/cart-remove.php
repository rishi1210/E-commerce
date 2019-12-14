<?php
require "common.php";
if (!isset($_SESSION['email']))
{
    header('location:index.php');
}
else 
{
    $item_id=$_GET['id'];
    $user_id=$_SESSION['user_id'];
    $query = "DELETE FROM users_items WHERE item_id='$item_id' AND user_id='$user_id' ";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
    header("location:cart.php? $er='order removed from cart'");
    
}

    

    ?>

