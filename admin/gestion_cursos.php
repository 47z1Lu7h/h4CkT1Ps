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
  <?php 
    session_start();
    if (($_SESSION['username'])=="admin") {
    }else{
      print "<script>alert(\"You need to be ADMIN to access this page!!\");window.location='login.php';</script>";
    }
    
    include('../views/includes/header.php'); 
  ?>
  <!-- ################################################################################################ -->
  <div class="wrapper row2 bgded overlay" style="background-image:url('../images/demo/backgrounds/02.png');">
    <div id="breadcrumb" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="/h4CkT1Ps/index.php"><strong> index  </strong></a></li>
        <li><a href="/h4CkT1Ps/views/admin.php">Admin</a></li>
        <li><a href="/h4CkT1Ps/pages/gestion_cursos.php">Gestion cursos</a></li>
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
        <h6><em>Herramientas administrativas</em></h6>
        <nav class="sdb_holder">      
          <ul>
            <li><a class="drop" href=""> <em>Gestion Administrativa</em> </a><br>
            <ul>
              <li><a href="/h4CkT1Ps/admin/gestion_ususarios.php">Gestion de usuarios</a></li>
              <li><a href="/h4CkT1Ps/admin/gestion_cursos.php">Gestion de cursos</a></li>
              <li><a href="/h4CkT1Ps/admin/gestion_herramientas.php">Gestionar herramientas</a></li>
            </ul>
          </ul>
        </nav>
        <!-- ################################################################################################ -->
      </div>      
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <div class="content three_quarter">
        <!-- ################################################################################################ -->
        <h1><strong> Gestion cursos </strong> </h1>
        <img class="imgr borderedbox inspace-5" src="../images/demo/imgr.gif" alt="agluwwagephawgeṕh">
        <p> </p>
        <p> gestiona<a href=""> Aquí</a> gracias :)</p>
          
        <!-- ################################################################################################ -->
      </div>
    </main>
  </div>
  <!-- ################################################################################################ -->
  <?php include('../views/includes/footer.php'); ?>
  <!-- ################################################################################################ -->
</body>
</html>
