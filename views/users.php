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
  <?php session_start();?>
  <?php include('../views/includes/header.php'); ?>
  <?php include('../views/functions.php'); ?>
  <?php include('../views/arrays.php'); ?>
  <!-- ################################################################################################ -->
  <div class="wrapper row2 bgded overlay" style="background-image:url('../images/demo/backgrounds/02.png');">
    <div id="breadcrumb" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="/h4CkT1Ps/index.php">Home</a></li>
        <li><a href="/h4CkT1Ps/views/usuarios.php">Ususario</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row3">
    <main class="hoc container clear">
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="content">
        <!-- ################################################################################################ -->
        <h1>Users</h1>
        <img class="imgr borderedbox inspace-5" src="" alt="">
        <div class="content three_quarter">
        <!-- ################################################################################################ -->
        <figure class="group">
          <figcaption>
            <p><?php mostrarArray($users)?> </p><br>
            <footer><p> y@p1  -->>  <a class="btn" href="../pages/noDisp.php"> y3p4&raquo;</a></p></footer>
          </figcaption></br>
        </figure>
      </div>
        <img class="imgl borderedbox inspace-5" src="" alt="">
      </div>
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>

  <!-- ################################################################################################ -->
  <?php include('../views/includes/footer.php'); ?>
  <!-- ################################################################################################ -->
</body>

</html>