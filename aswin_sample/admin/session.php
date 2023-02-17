<?php
   session_start();
   
   $name1= $_SESSION['admin_user'];
   

   
   if(empty($_SESSION['admin_user'])){
      header("location:login_admin.php");
     // die();
   }
?>
