<?php
  session_start();
   header("Location: login.php");
   $des = $_SESSION['id']; 
    session_unset($des);
   session_destroy();

?>