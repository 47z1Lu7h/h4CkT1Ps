<!DOCTYPE html>

<html>

<head>
  <title>h4Ck~T1p5</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="/h4CkT1Ps/assets/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">
  <!-- ################################################################################################ -->
  <?php 
    session_start();
    if (($_SESSION['username'])=="admin") {
    }else{
      print "<script>alert(\"You need to be ADMIN to access this page!!\");window.location='login.php';</script>";
    }
    
    include('includes/header.php'); 
  ?>
  <!-- ################################################################################################ -->
  <div class="wrapper row2 bgded overlay" style="background-image:url('../assets/images/demo/backgrounds/02.png');">
    <div id="breadcrumb" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="/h4CkT1Ps/index.php"><strong> index  </strong></a></li>
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
        <h6><em>Herramientas administrativas</em></h6>
        <nav class="sdb_holder">      
          <ul>
            <li><a class="drop" href=""> <em>Gestion Administrativa</em> </a><br>
            <ul><em>
              <li><a href="admin/gestion_usuarios.php">Gestion de usuarios</a></li>
              <li><a href="admin/gestion_cursos.php">Gestion de cursos</a></li>
              <li><a href="admin/gestion_herramientas.php">Gestionar herramientas</a></li>
              <li><a href="admin/gestion_products.php">Gestion de productos</a></li>
            </ul></em>
          </ul>
        </nav>
        <!-- ################################################################################################ -->
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <div class="content two_quarter">
        <!-- ################################################################################################ -->
        <div class="posts">
        <figure class="group">
          <figcaption>
            <h6 class="heading"><strong> Admin Panel </strong>  </h6>
            <p><em>Panel administración admin</em></p><br>
            <footer><div><img src="../assets/images/demo/gallery/adm1n.png" alt=""></div></footer>
          </figcaption>
        </figure>

        <!-- ################################################################################################ -->
      </div>
</main>
  </div>
  <!-- ################################################################################################ -->
  <?php include('../views/includes/footer.php'); ?>
  <!-- ################################################################################################ -->
</body>

</html>
