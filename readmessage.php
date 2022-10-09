<?php
  require("db_connection.php");
  require("code_bank_inc.php");

  $mesid = $_GET['value'];
  $read = '0';

   $sql  = "update messages set Read='$read' where mes_id =$mesid";

   $x = $mysqli->query($sql);

   header("location:messages.php");


 ?>
