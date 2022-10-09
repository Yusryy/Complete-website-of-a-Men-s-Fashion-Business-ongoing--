<?php
  require("validate_user_inc.php");
  require("db_connection.php");
  require("code_bank_inc.php");

  $pro_id = $_GET['value'];
  $user_id = $_SESSION['user_id'];

  $sql = "select * from wish where pro_id=$pro_id AND user_id=$user_id";

  $rs  = $mysqli->query($sql);

  if(mysqli_num_rows($rs)>0){
    $sql_delete = "delete from wish where pro_id=$pro_id AND user_id=$user_id";
    $y = $mysqli->query($sql_delete);
    header("location:wishlist.php");
  } else {
    header("location:wishlist.php");
  }



 ?>
