<?php
  require 'includes/common.php';
  $item_id=$_GET['id'];
  $user_id=$_SESSION['id'];
  $delete_query="delete from users_items where user_id='$user_id' and item_id='$item_id' and status='Added to cart'";
  $result=mysqli_query($con,$delete_query) or die(mysqli_error($con));
  header('location:cart.php');
?>

