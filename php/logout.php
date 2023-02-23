<?php
   session_start();
   
   if(session_destroy()) {
      unset($_SESSION['user_id']);
      print "<script>alert(\"Bye!! Have a nice day!! \");window.location='../views/login.php';</script>";
   }
?>