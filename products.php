<?php
  require 'includes/common.php';
  ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Products</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="#" />
    </head>
    <body>
        <?php
        include 'includes/header.php';
        require 'includes/check_if_added.php';
        ?>
        <div class="container" style=" margin-top: 80px">
            <div class="jumbotron text-center">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place.</p>
        </div>
        </div>   
        <div class="container">
        <div class=" row text-center">
            <div class="col-md-3  col-sm-6">
                <div class="thumbnail">
                <img src="images/camera.jpg" alt="Camera 1">
                <div class="caption">
                    <h3>Camera 1</h3>
                    <p>Price:Rs 25000</p>
                    <?php if (!isset($_SESSION['email'])) 
                    { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }
                    else { if (check_if_added_to_cart(1)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                        else { ?>
                           <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                               <?php } } 
                               ?>
                </div>
                </div>
            </div>
            <div class="col-md-3  col-sm-6 ">
                <div class="thumbnail">
                <img src="images/camera.jpg" alt="Cammera 1">
                
                <div class="caption">
                    <h3>Camera 1</h3>
                    <p>Price:Rs 25000</p>
                    <?php if (!isset($_SESSION['email'])) 
                    { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }
                    else { if (check_if_added_to_cart(2)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                        else { ?>
                           <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                               <?php } } 
                               ?>
                </div>
                </div>
            </div>
            <div class="col-md-3  col-sm-6 ">
                <div class="thumbnail">
                <img src="images/camera.jpg" alt="Cammera 1">
                
                <div class="caption">
                    <h3>Camera 1</h3>
                    <p>Price:Rs 25000</p>
                    <?php if (!isset($_SESSION['email'])) 
                    { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }
                    else { if (check_if_added_to_cart(3)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                        else { ?>
                           <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                               <?php } } 
                               ?>
                </div>
                </div>
            </div>
            <div class="col-md-3  col-sm-6 ">
                <div class="thumbnail">
                <img src="images/camera.jpg" alt="Cammera 1">
                
                <div class="caption">
                    <h3>Camera 1</h3>
                    <p>Price:Rs 25000</p>
                    <?php if (!isset($_SESSION['email'])) 
                    { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }
                    else { if (check_if_added_to_cart(4)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                        else { ?>
                           <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                               <?php } } 
                               ?>
                </div>
                </div>
            </div>
        </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/watch.jpg" alt="Watch 1">
                        <div class="caption">
                            <h3>Watch 1</h3>
                            <p>Price:Rs 5000</p>
                            <?php if (!isset($_SESSION['email'])) 
                    { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }
                    else { if (check_if_added_to_cart(5)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                        else { ?>
                           <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                               <?php } } 
                               ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/watch.jpg" alt="Watch 1">
                        <div class="caption">
                            <h3>Watch 1</h3>
                            <p>Price:Rs 5000</p>
                            <?php if (!isset($_SESSION['email'])) 
                    { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }
                    else { if (check_if_added_to_cart(6)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                        else { ?>
                           <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                               <?php } } 
                               ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/watch.jpg" alt="Watch 1">
                        <div class="caption">
                            <h3>Watch 1</h3>
                            <p>Price:Rs 5000</p>
                            <?php if (!isset($_SESSION['email'])) 
                    { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }
                    else { if (check_if_added_to_cart(7)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                        else { ?>
                           <a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                               <?php } } 
                               ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/watch.jpg" alt="Watch 1">
                        <div class="caption">
                            <h3>Watch 1</h3>
                            <p>Price:Rs 5000</p>
                            <?php if (!isset($_SESSION['email'])) 
                    { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }
                    else { if (check_if_added_to_cart(8)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                        else { ?>
                           <a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                               <?php } } 
                               ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" row text-center">
            <div class="col-md-3  col-sm-6 ">
                <div class="thumbnail">
                <img src="images/shirt.jpg" alt="Shirt 1">
                
                <div class="caption">
                    <h3>Shirt 1</h3>
                    <p>Price:Rs 5000</p>
                    <?php if (!isset($_SESSION['email'])) 
                    { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }
                    else { if (check_if_added_to_cart(9)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                        else { ?>
                           <a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                               <?php } } 
                               ?>
                </div>
                </div>
            </div>
            <div class="col-md-3  col-sm-6 ">
                <div class="thumbnail">
                <img src="images/shirt.jpg" alt="Shirt 1">
                
                <div class="caption">
                    <h3>Shirt 1</h3>
                    <p>Price:Rs 5000</p>
                    <?php if (!isset($_SESSION['email'])) 
                    { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }
                    else { if (check_if_added_to_cart(10)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                        else { ?>
                           <a href="cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                               <?php } } 
                               ?>
                </div>
                </div>
            </div>
            <div class="col-md-3  col-sm-6 ">
                <div class="thumbnail">
                <img src="images/shirt.jpg" alt="Shirt 1">
                
                <div class="caption">
                    <h3>Shirt 1</h3>
                    <p>Price:Rs 5000</p>
                    <?php if (!isset($_SESSION['email'])) 
                    { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }
                    else { if (check_if_added_to_cart(11)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                        else { ?>
                           <a href="cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                               <?php } } 
                               ?>
                </div>
                </div>
            </div>
            <div class="col-md-3  col-sm-6 ">
                <div class="thumbnail">
                <img src="images/shirt.jpg" alt="Shirt 1">
                
                <div class="caption">
                    <h3>Shirt 1</h3>
                    <p>Price:Rs 5000</p>
                    <?php if (!isset($_SESSION['email'])) 
                    { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }
                    else { if (check_if_added_to_cart(12)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                        else { ?>
                           <a href="cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                               <?php } } 
                               ?>
                </div>
                </div>
            </div>
        </div>
        </div>
        <?php
           include 'includes/footer.php';
        ?>
    </body>
</html>
