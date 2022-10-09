<?php
  require("validate_user_inc.php");

  if($_SESSION['user_grp']!="admin"){
    header("location:invalid_login.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css2/style.css">
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
          <h2 class="text-danger">Delete Product Info</h2>
          <h2 class="text-primary"></h2>


        <?php
          //code here
          if($_REQUEST['status'] == "pass"){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success</strong>product record was successfully deleted.

              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <hr>
                <a href="dashboard.php" class="btn btn-dark">Dashboard</a>
                <a href="delete_product1.php" class="btn btn-primary">Delete Another Record</a>
            </div>
            <?php
          }
          else{
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Failed</strong> Deleting customer record was not successfull.

              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <hr>
              <hr>
                <a href="dashboard.php" class="btn btn-dark">Dashboard</a>
                <a href="delete_product1.php" class="btn btn-primary">Try Again</a>
            </div>
            <?php
          }


         ?>






        </div><!-- end of col-8 main form content goes here -->



      </div><!-- end of row-->




      <div class="row">
        <div class="col-lg-12 col-md-12">
          <p style="text-align:center;">All Rights Reserved &reg; Copyright Nuzrath &copy; 2022</p>
        </div>
      </div><!-- end of footer-->



    </div><!--end of container -->



  </body>
</html>
