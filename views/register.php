<!DOCTYPE html>

<html>
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="/h4CkT1Ps/assets/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">
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
      <li><a href="/h4CkT1Ps/views/register.php">Register</a></li>
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
        <h1>Registro</h1>
        <img class="imgr borderedbox inspace-1" src="../assets/images/demo/imgr.jpg" alt="">
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <form role="form" name="registro" action="../php/registro.php" method="post">
          <div class="form-group">
              <label for="username">Nombre de usuario</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Username">
          </div>
          <div class="form-group">
              <label for="fullname">Nombre Completo</label>
              <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
          </div>
              <div class="form-group">
              <label for="email">Correo Electronico</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Y@Ur m41L">
          </div>
              <div class="form-group">
              <label for="password">Contrase&ntilde;a</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="passw@rd!">
          </div>
              <div class="form-group">
              <label for="confirm_password">Confirmar Contrase&ntilde;a</label>
              <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm passw@rd!">
          </div></br>
      <!-- ################################################################################################ -->
        <button type="submit" class="btn btn-default">Registrar</button>
        </form><br><br>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <p> <strong><em> Ya tienes una cuenta?? </em> </strong> <h3><a class="btn btn" href="/h4CkT1Ps/views/login.php">Inicia Sesion!! </a></p></h3>
    <div class="clear"></div>
    </main>
  </div>
  <!-- ################################################################################################ -->
  <!-- JAVASCRIPTS -->
  <script src="/h4CkT1Ps/assets/layout/scripts/valida_registro.js"></script>
  <!-- ################################################################################################ -->
  <?php include('../views/includes/footer.php'); ?>
  <!-- ################################################################################################ -->
</body>
</html>
