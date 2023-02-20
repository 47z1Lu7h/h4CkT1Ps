<?php
  session_start();
  if(!isset($_SESSION["username"]) || $_SESSION["username"]==null){
    print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
  }
?>
<!DOCTYPE html>

<html>

<head>
  <title>h4Ck~T1p5</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">
  <!-- ################################################################################################ -->
  <?php include('includes/header.php');?>
  <!-- ################################################################################################ -->
  <div class="wrapper row2 bgded overlay" style="background-image:url('../images/demo/backgrounds/02.png');">
    <div id="breadcrumb" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="/h4CkT1Ps/index.php">index</a></li>
        <li><a href="/h4CkT1Ps/views/home.php">Home</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row3">
    <main class="hoc container clear">
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="sidebar one_quarter first">
        
        <!-- ################################################################################################ -->
        <h6> Hey</h6>
        <nav class="sdb_holder">      
          <ul>
            <li><a class="drop" href="">cousas </a>
              <ul>
              <li><a href="/h4CkT1Ps/pages/gestion_herramientas.php">Gestion </a></li>
              <li><a href="/h4CkT1Ps/pages/gestion_ususarios.php">Gestion </a></li>
              <li><a href="/h4CkT1Ps/pages/gestion_cursos.php">Gestion </a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- ################################################################################################ -->
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <div class="content three_quarter">
        <!-- ################################################################################################ -->
        <h1><strong> Welcome back <?php echo $_SESSION["username"]?>!!</strong></h1>
        <img class="imgr borderedbox inspace-5" src="" alt="test">
        <p> </p>
      
        <p>Panel user</p>
          
        <!-- ################################################################################################ -->
      </div>
</main>
  </div>
  <!-- ################################################################################################ -->
  <?php include('../views/includes/footer.php'); ?>
  <script src="../layout/scripts/jquery.min.js"></script>
  <script src="../layout/scripts/jquery.backtotop.js"></script>
  <script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
  <!-- ################################################################################################ -->
</body>

</html>
