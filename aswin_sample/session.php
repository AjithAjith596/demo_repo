<?php
   session_start();
   
   $name = $_SESSION['login_user'];
   

   
   if(empty($_SESSION['login_user'])){
      header("location:login.php");
     // die();
   }
?>
