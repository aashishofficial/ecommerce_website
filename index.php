<?php
require 'includes/common.php';
if (isset($_SESSION['email']))
{
    header('location:products.php');
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Lifestyle Store</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="#" />
  </head>
  <body>
      <?php
        include 'includes/header.php';
      ?>
      <div id="banner_image" >
          <div class="container">
              <center>
              <div id="banner_content">
                  <h1>We sell lifestyle.</h1>
                    <p>Flat 40% OFF on premium brands</p>
                    <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
              </div>
              </center>
          </div>
      </div>
      <?php
           include 'includes/footer.php';
      ?>
  </body>
</html>