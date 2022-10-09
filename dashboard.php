<?php
  require("validate_user_inc.php");

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script type="text/javascript" src="js/bootstrap.js"> </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
  <body>

    <div class="container">

      <div class="row">
        <img src="img/logoo.jpg" alt="" style="width:25%">
      </div><!-- end of row-->

      <div class="row">
        <div class="col-lg-1 col-md-1" style="background-color:rgba(41, 44, 52, 0.49);">

        </div><!--end of col-4 left part for an image or adv -->

        <div class="col-lg-8 col-md-8">
          <h2 class="text-success">Dashboard</h2>
          <h3 class="text-secondary">Logged in User :
            <span style="text-transform:capitalize;">
              <?php
                $arr = explode("@",$_SESSION['user_id']);
                echo $arr[0];
                /*echo "<pre>";
                print_r($_SESSION);
                echo "</pre>";*/
               ?>
               </span>
          </h3>
          <hr>

          <div class="row my-3">



          <div class="col-lg-3 col-md-3">
            <h3 class="text-center">Add<br>Product</h3>
            <p>You can use this feature to add Products to the database</p>
            <a href="add_product.php" class="btn btn-success">ADD</a>
          </div><!-- end of col-3-->

          <div class="col-lg-3 col-md-3">
            <h3 class="text-center">Edit<br>Product</h3>
            <p>You can use this feature to Edit/Update product information to the database</p>
            <a href="edit_product1.php" class="btn btn-primary">EDIT</a>
          </div><!-- end of col-3-->


          <?php
            // if($_SESSION['user_id']=='admin'){
          ?>
            <div class="col-lg-3 col-md-3">
              <h3 class="text-center">Delete Product</h3>
              <p>You can use this feature to delete product information from the database</p>
              <a href="delete_product1.php" class="btn btn-danger">DELETE</a>
            </div><!-- end of col-3-->
          <?php
            // }
          ?>

          <div class="col-lg-3 col-md-3">
            <h3 class="text-center">Search Product</h3>
            <p>You can use this feature to Search product information from the database</p>
            <a href="search_product1.php" class="btn btn-dark">SEARCH</a>
          </div><!-- end of col-3-->


        </div><!-- end of row-->
          <div class="col-lg-3 col-md-3">
            <h3 class="text-center">Sign Out</h3>
            <p>You can safely sign out</p>
            <a href="signout.php" class="btn btn-dark">SIGNOUT</a>
          </div><!-- end of col-3-->
        <div class="row">



        </div><!-- end of row-->


        </div><!-- end of col-8 main form content goes here -->


      </div><!-- end of row-->




      <div class="row">
        <div class="col-lg-12 col-md-12">
          <p style="text-align:center;" class="copyright">&#9400;2022 NZ Fashion and Clothing. All rights reserved; Web Solution by <strong> Mohamed Yusry </strong> </p></div>
        </div>
      </div><!-- end of footer-->



    </div><!--end of container -->



  </body>
</html>
