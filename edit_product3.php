<?php
  require("validate_user_inc.php");

  //conntect to database
  require("db_connection.php");
  require("code_bank_inc.php");

  //see all content recieved from the form
/*  echo "<pre>";
  print_r($_REQUEST);
  echo "</pre>";
  die("test ends here");*/

   //storing the values from the form to variables
   $pro_id      = addslashes($_REQUEST['pro_id']);
   $prname         = addslashes($_REQUEST['prname']);
   $price          = addslashes($_REQUEST['price']);
   $categories     = addslashes($_REQUEST['categories']);
   $brand          = addslashes($_REQUEST['brand']);
   //next build the Dynamic SQL command using these variables.

   $sql  = "update product set ";
   $sql .= "prname='$prname',";
   $sql .= "price='$price',";
   $sql .= "categories='$categories',";
   $sql .= "brand=$brand where pro_id=$pro_id";

   /*echo "<pre>";
   echo $sql;
   echo "</pre>";
   die();*/


   //execute the sql command

   $x = $mysqli->query($sql);

   if($x>0){
     //changes were successfully saved
     //redirect the user to the next page confirmation  page

     //see whether an image has been uploaded if so do the
     //needful to upload it

     if($_FILES['picture']['error'] == 0 && $_FILES['picture']['type']=="image/jpeg"){
        $old_picture_name = getProfilePicture($pro_id);

        $filename    = $_FILES['picture']['tmp_name'];
        $destination = "";

        if($old_picture_name == "default.jpg"){
          //should generate a filename
          $destination = $pro_id . "_" . rand().rand().rand().".jpg";
        }
        else{
          //should use the existing filename
          $destination = $old_picture_name;
        }



        $fx = move_uploaded_file($filename,"profile_pics/large/".$destination);
        copy("profile_pics/large/".$destination, "profile_pics/thumbs/".$destination);

        //resize the thumb pic
        resizeThumbPicture("profile_pics/thumbs/",$destination);


        $sql2 = "update product set picture='$destination' where pro_id=$pro_id";

        $mysqli->query($sql2);


     }



     header("location:edit_product4.php?status=pass");
   }
   else{
     //saving changes to the record failed.
     //redirect the user to the next page confirmation  page
     header("location:edit_product4.php?status=fail");
   }



 ?>
