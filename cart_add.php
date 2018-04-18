<?php
   require 'includes/common.php';
   $user_id=$_SESSION['id'];
   $item_id=$_GET['id'];
   $status='Added to cart';
   $insert_query="insert into users_items(user_id,item_id,status) values ('$user_id','$item_id','$status')";
   $result=mysqli_query($con,$insert_query) or die(mysqli_error($con));
   header ('location:products.php');
?>

