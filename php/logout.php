<?php
   session_start();
   
   if(session_destroy()) {
      print "<script>alert(\" have a nice day!! \");window.location='../views/login.php';</script>";
   }
?>