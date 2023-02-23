<!DOCTYPE html>

<html>
<head>
  <title>Lolgin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="/h4CkT1Ps/assets/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    
</head>

<body id="top">
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <?php include('../views/includes/header.php'); ?>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row2 bgded overlay" style="background-image:url('../assets/images/demo/backgrounds/02.png');">
    <div id="breadcrumb" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul>
      <li><a href="/h4CkT1Ps/index.php"><strong> index  </strong></a></li>
      <li><a href="/h4CkT1Ps/views/pages/login.php">Login</a></li>
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
        <img class="imgl borderedbox inspace-1" src="../assets/images/demo/imgl.jpg" alt="">
      </div>
      <form role="form" name="login" action="../php/login.php" method="post">
            <div class="form-group">
              <label for="username">UserName or email</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
            </div>
            <div class="form-group">
              <label for="password">passw@rd!</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
            </div><br>
            <!-- ################################################################################################ -->
            <button type="submit" class="btn btn-default">Acceder</button>
      </form><br><br>
    <!-- ################################################################################################ -->
    <p><em> <strong> Todavía no tienes una cuenta?</strong></em>  <h3><a href="/h4CkT1Ps/views/register.php" class="btn btn-default">Registrate!! </a></p>
    </div>
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
  <!-- ################################################################################################ -->
  </main>
  </div>
  <!-- ################################################################################################ -->
  <!-- JAVASCRIPTS -->
  <script src="/h4CkT1Ps/assets/layout/scripts/valida_login.js"></script>
  <!-- ################################################################################################ -->
  <?php include('../views/includes/footer.php'); ?>
  <!-- ################################################################################################ -->
</body>
</html>
