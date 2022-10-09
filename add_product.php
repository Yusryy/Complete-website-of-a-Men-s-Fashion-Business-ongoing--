
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
          <h2>Register Product </h2>


          <form class="" action="add_product_2.php"
           enctype="multipart/form-data"  method="post">

            <label for="" class="label">Product Name</label>
            <input type="text" name="prname" value="" class="form-control">

            <label for="" class="label">Price</label>
            <input type="text" name="price" value="" class="form-control">

            <label for="" class="label">Categories</label>
            <input type="text" name="categories" value="" class="form-control">

            <label for="" class="label">Brand</label>
            <input type="text" name="brand" value="" class="form-control">

            <label for="" class="label">Picture</label>
            <input type="file" name="picture" value="" class="form-control">

            <label for="" class="label"></label>
            <input type="submit" name="" value="Add New Product"
              class="btn btn-primary">
            <input type="reset" name="" value="Cancel"
              class="btn btn-danger">






          </form>



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
</html>
