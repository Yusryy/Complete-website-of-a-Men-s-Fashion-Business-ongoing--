<?php
  require("validate_user_inc.php");

  if($_SESSION['user_grp']!="admin"){
    header("location:invalid_login.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title></title>
      <link rel="stylesheet" href="css/bootstrap.css">
      <script type="text/javascript" src="js/bootstrap.js"> </script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    </head>

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
          <h2 class="text-danger">Delete Product </h2>


          <?php
            //search in the database for the customer record if found
            //display the details of the customer record in the following htm
            //form, otherwise display an error message - alertbox from bootstrap

            //lest connect to database
            require("db_connection.php");

            /*echo "<pre>";
            print_r($_REQUEST);
            echo "</pre>";*/

            //building the dynamic sql command using the cus_id passed in for
            //searching the record in the database table
            $pro_id = $_REQUEST['pro_id'];

            $sql = "select * from product where pro_id=$pro_id";

            //lets execute the sql command and get the details

            $rs = $mysqli->query($sql);

            //lets see how many records were founds

            if(mysqli_num_rows($rs)>0){
              //yes record is found (1)
              //now that the record is found lets display  its contents inside
              //html form below
              //$row = mysqli_fetch_array($rs);
              $row = mysqli_fetch_assoc($rs);

              //echo "<pre>";
              //print_r($row);
              //echo "</pre>";

              //echo "name : " . $row['name'];
              ?>


          <form class="" action="delete_product3.php" method="post">

            <input type="hidden" name="pro_id" value="<?php echo $row['pro_id'];?>">

            <label for="" class="label">Product Name</label>
            <input type="text" name="prname" value="<?php echo $row['prname']; ?>"
            class="form-control">

            <label for="" class="label">Price</label>
            <input type="text" name="price" value="<?php echo $row['price']; ?>"
            class="form-control">

            <label for="" class="label">Categories</label>
            <input type="text" name="categories" value="<?php echo $row['categories']; ?>"
            class="form-control">

            <label for="" class="label">Brand</label>
            <input type="number" name="brand" value="<?php echo $row['brand']; ?>"
            class="form-control">

            <br />
            <label for="">Product Picture</label>
            <img src="profile_pics/thumbs/<?php echo $row['picture']; ?>"
             class="img col-2"  alt="">
            <br />

            <label for="" class="label">Picture</label>
            <input type="file" name="picture" value="" class="form-control">

            <div class="btn p-0 pt-3 ">
                <button type="submit" class="btn btn-primary">Confirm Delete Product</button>
                <button type="reset" name="" value="Cancel" class="btn btn-danger">Cancel</button>
              </div>


          </form>

          <?php
        }
        else{
          //no records were found (0)
          //echo "no records were found";
          ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Record Not Found</strong> The product ID you entered
              cannot be found in the database. please try again with another
              product ID.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <hr>
            <hr>
              <a href="dashboard.php" class="btn btn-dark">Dashboard</a>
              <a href="edit_product1.php" class="btn btn-danger">Try Again</a>
          </div>

          <?php
        }

       ?>


        </div><!-- end of col-8 main form content goes here -->



      </div><!-- end of row-->




      <div class="row">
        <div class="col-lg-12 col-md-12">
          <p  class="copyright">&#9400;2022 NZ Fashion and Clothing. All rights reserved; Web Solution by <strong> Mohamed Yusry </strong> </p></div>
        </div>
      </div><!-- end of footer-->



    </div><!--end of container -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>


  </body>
</html>
