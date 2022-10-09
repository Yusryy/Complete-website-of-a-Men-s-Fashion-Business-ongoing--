<?php
  require ("db_connection.php");
  require ("code_bank_inc.php");

  $prname         = addslashes($_REQUEST['prname']);
  $price          = addslashes($_REQUEST['price']);
  $categories     = addslashes($_REQUEST['categories']);
  $brand          = addslashes($_REQUEST['brand']);
  $picture        = addslashes($_REQUEST['picture']);

  $sql  = "insert into product (prname,price,categories,brand,picture) values(";
  $sql .= "'$prname',";
  $sql .= "'$price',";
  $sql .= "'$categories',";
  $sql .= "'$brand',";
  $sql .= "$picture)";




  $x = $mysqli->query($sql);

  if($x>0){
     echo "record added successfully";
     // redirect the user to the next page
     // check whether a profile pic has been uploaded ifso upload it*/

      if( $_FILES['picture']['error'] == 0 && $_FILES['picture']['type']=="image/jpg"){

        $last_id = $mysqli->insert_id;
        $filename    = $_FILES['picture']['tmp_name'];
        $destination = $last_id . "_" . rand().rand().rand() . ".jpg";

        $fx = move_uploaded_file($filename,"product_pics/thumbs/".$destination);
        if($fx>0){
        }
       else{
        //file not uploaded or failed.!
        header("location:add_product3.php?status=fail");
        }
       }
      $sql2 = "update product set picture='$destination' where pro_id=$last_id";
      $mysqli->query($sql2);
     header("location:add_product3.php?status=pass");
   }

   else{
     //echo "record adding failed";
     //redirec the user to the next page
     header("location:add_product3.php?status=fail");
   }

 ?>
