<?php
   session_start();
   
   if(session_destroy()) {
      print "<script>alert(\"Bye!! Have a nice day!! \");window.location='../views/login.php';</script>";
   }
?>