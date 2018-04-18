<?php
  require 'includes/common.php';
  if (!isset($_SESSION['email'])){
      header ('location:login.php');
  }
 $user_id=$_SESSION['id'];
 $select_query="select * from users_items ui inner join items i on i.id=ui.item_id where user_id='$user_id' and status='Added to cart' ";
 $result=mysqli_query($con,$select_query) or die(mysqli_error($con));

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="#" />
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container" style="margin-top:80px">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                <table class="table table-hover">
                <tbody>
                    <tr><th>Item Number</th> <th>Item Name</th> <th>Price</th><th></th></tr>
                     <?php
                     $sum=0;
                     $items_id="";
                     if (mysqli_num_rows($result)==0){
                                  echo "<center><h3>Add items to the cart first!</h3></center>";
                     }
                    else{
                        
                        while($row=mysqli_fetch_array($result)){
                            $sum=$sum+$row['price'];
                            $items_id .=$row['id'].',';
                    echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['price']."</td><td><a href='cart_remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                        }
                    
                    echo "<tr><td></td><td>Total</td><td>Rs {$sum}/-</td><td><a href='success.php?id={$items_id}' class='btn btn-primary'>Confirm Order</a></td></tr>";
                    }
                ?>
                </tbody>
            </table> 
            </div>
            </div>
        </div>
        <div class='navbar-fixed-bottom'>
        <?php
         include 'includes/footer.php';
       ?>
        </div>
    </body>
</html>
