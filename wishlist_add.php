<?php
session_start();
require("db_connection.php");
require("code_bank_inc.php");

 $userexist = false;
 if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

   $userexist = true;

 } else{
   header("location:user_sign-in.php");
 }


  if($userexist == true){
    $user_id = $_SESSION['user_id'];
    $pro_id = $_GET['value'];


    $sql2 = "select * from wish where pro_id=$pro_id AND user_id=$user_id";
    $x = $mysqli->query($sql2);
    if(mysqli_num_rows($x)>0){
     header("location:indexs.php");
    } else {

     $sql  = "insert into wish (pro_id,user_id) values(";
     $sql .= "'$pro_id',";
     $sql .= "'$user_id')";

     $x = $mysqli->query($sql);

     header("location:indexs.php");
   }
  }

   ?>
