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
    <section class="bg-light text-secondary p-3 mt-4">
      <div class="container">
        <img src="img/logoo.jpg" alt="" style="width:15%">
        <div class="row">
          <h2 class="text-primary">Edit Product</h2>
          <div class="col-sm-2">
            <h4 class="mb-3 mb-md-0 ">Enter product ID</h4>
          </div>
          <div class="col-sm-10 mt-2">
            <form action="edit_product2.php" method="post">
              <div class="input-group input-group-lg">
                <input type="text" class="form-control" name="pro_id" placeholder="Search">
                <div class="input-group-btn">
                  <button class="btn btn-secondary btn-lg" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
