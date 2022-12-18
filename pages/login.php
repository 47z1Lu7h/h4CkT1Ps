<!DOCTYPE html>

<html>
<head>
  <title>Indripress | Pages | Full Width</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  
</head>

<body id="top">
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <?php include('../plantillas/header.php'); ?>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row2 bgded overlay" style="background-image:url('../images/demo/backgrounds/02.png');">
    <div id="breadcrumb" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul>
      <li><a href="/h4CkT1Ps/index.php">Home</a></li>
      <li><a href="/h4CkT1Ps/pages/login.php">Login</a></li>
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
      <div class="content">
        <!-- ################################################################################################ -->
        <h1>Login</h1>
        <img class="imgl borderedbox inspace-1" src="../images/demo/imgl.jpg" alt="">
        <p> Ya tienes una cuenta?, <a href="/h4CkT1Ps/pages/register.php">Registrate!! </a>.</p>
        </div>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET" enctype="multipart/form-data">
            <div class="one_third ">
              <label for="name">Ususario <span>*</span></label>
              <input type="text" name="name" id="name" value="<?php echo $usuario; ?>" size="22" required>
              <label for="email">Password <span>*</span></label>
              <input type="email" name="email" id="email" value="<?php echo $clave; ?>" size="22" required></br>
              <input type="submit" name="submit" value="Enviar"></br>
              <input type="reset" name="reset" value="Reset">
            </div>
        </form>

        <!-- ################################################################################################ -->
      </div>
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <?php include('../plantillas/footer.php'); ?>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="../layout/scripts/jquery.min.js"></script>
  <script src="../layout/scripts/jquery.backtotop.js"></script>
  <script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>