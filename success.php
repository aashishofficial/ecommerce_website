<?php
  require 'includes/common.php';
  if(!isset($_SESSION['email'])){
      header('location:index.php');
  }
  $user_id=$_SESSION['id'];
  $item_id= str_split($_GET['id']);
  foreach ($item_id as $id){
      if ($id!=','){
      $update_query="update users_items set status='Confirmed' where  user_id='$user_id' and item_id='$id'";
      $result=mysqli_query($con,$update_query) or die(mysqli_error($con));
      }    
  } 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Success</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class='text-center' style="margin-top: 60px">
        <h4>Your order is confirmed. Thank you for shopping
            with us. <a href='products.php'>Click here</a> to purchase any other item.</h4>
        </div>
    </body>
    <div class='navbar-fixed-bottom'>
    <?php
       include 'includes/footer.php';
    ?>
    </div>
</html>

