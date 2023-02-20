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
  <!-- ################################################################################################ -->
  <div class="wrapper row2 bgded overlay" style="background-image:url('../images/demo/backgrounds/02.png');">
    <div id="breadcrumb" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="/h4CkT1Ps/index.php">Home</a></li>
        <li><a href="/h4CkT1Ps/views/admin.php">Admin</a></li>
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
        <h6> Herramientas administrativas</h6>
        <nav class="sdb_holder">      
          <ul>
            <li><a class="drop" href="">Gestion Administrativa</a>
              <ul>
              <li><a href="/h4CkT1Ps/pages/gestion_herramientas.php">Gestionar herramientas</a></li>
              <li><a href="/h4CkT1Ps/pages/gestion_ususarios.php">Gestion de usuarios</a></li>
              <li><a href="/h4CkT1Ps/pages/gestion_cursos.php">Gestion de cursos</a></li>
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
        <h1><strong> Admin Panel </strong>  </h1>
        <img class="imgr borderedbox inspace-5" src="" alt="test">
        <p> </p>
        <p>Panel administtración admin, tendra acceso con privilegios a toda la pagina y toda la base de datos.</p>
          
        <!-- ################################################################################################ -->
      </div>
</main>
  </div>
  <!-- ################################################################################################ -->
  <?php include('../views/includes/footer.php'); ?>
  <!-- ################################################################################################ -->
</body>

</html>