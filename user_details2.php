<?php

  //connect to database
  require("db_connection.php");
  require("code_bank_inc.php");

     //storing the values from the form to variables
     $user_id         = addslashes($_REQUEST['user_id']);
     $fname          = addslashes($_REQUEST['fname']);
     $lname         = addslashes($_REQUEST['lname']);
     $email          = addslashes($_REQUEST['email']);
     $phone           = addslashes($_REQUEST['phone']);

     //next build the Dynamic SQL command using these variables.

     $sql  = "update userdetails set ";
     $sql .= "userfirstname='$fname',";
     $sql .= "userlastname='$lname',";
     $sql .= "useremail='$email',";
     $sql .= "userno='$phone' where user_id=$user_id";

    $x = $mysqli->query($sql);

    if($x>0){
      //changes were successfully saved
      //redirect the user to the next page confirmation  page

      //see whether an image has been uploaded if so do the
      //needful to upload it

      if($_FILES['picture']['error'] == 0 && $_FILES['picture']['type']=="image/jpeg"){
         $old_picture_name = getProfilePictureuser($userid);

         $filename    = $_FILES['picture']['tmp_name'];
         $destination = "";

         if($old_picture_name == "default.jpg"){
           //should generate a filename
           $destination = $user_id . "_" . rand().rand().rand().".jpg";
         }
         else{
           //should use the existing filename
           $destination = $old_picture_name;
         }



         $fx = move_uploaded_file($filename,"userpics/".$destination);
         $sql2 = "update userdetails set userpic='$destination' where user_id=$user_id";

         $mysqli->query($sql2);


      }



      header("location:user_details.php?status=pass");
    }
    else{
      //saving changes to the record failed.
      //redirect the user to the next page confirmation  page
      header("location:user_details.php?status=fail");
    }




 ?>
