<?php
  session_start();
  //check whether the user has logged in or not.!
  if(count($_SESSION)<=0){
    //echo "u have not logged in";
    //die();
    header("location:invalid_login.php");
  }
?>
