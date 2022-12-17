<!DOCTYPE html>

<html>

<head>
  <title>h4Ck~T1p5</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="/indi//layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">
  <!-- ################################################################################################ -->
  <?php include('/indi/plantillas/header.php'); ?>
  <!-- ################################################################################################ -->
  <div class="wrapper row2 bgded overlay" style="background-image:url('../images/demo/backgrounds/02.png');">
    <div id="breadcrumb" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="/indi/index.php">Home</a></li>
        <li><a href="/indi/plantillas/cursos.php">Cursos</a></li>
        <li><a href="/indi/pages/AD.php">Active Directory</a></li>
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
      <div class="sidebar one_quarter first">
        
        <!-- ################################################################################################ -->
        <h6> Cursos Disponibles</h6>
        <nav class="sdb_holder">      
          <ul>
            <li><a class="drop" href="/indi/pages/basico.php">Nivel Básico</a>
              <ul>
              <li><a href="/indi/pages/basicHack.php">Introduccion al Hacking</a></li>
                <li><a href="/indi/pages/noDisp.php">Personalización Linux</a></li>
              </ul>
            </li>
            <li><a href="/indi/pages/medio.php">Nivel Medio</a>
              <ul>
                <li><a href="/indi/pages/webAttacks.php">Pentesting Web</a></li>
              </ul>
            </li>
            <li><a href="/indi/pages/avanzado.php">Nivel Avanzado</a></li>
              <ul>
                <li><a href="/indi/pages/AD.php">Active Directory</a></li>
              </ul>
          </ul>
        </nav>
        <!-- ################################################################################################ -->
    </main>
  </div>
   <!-- ################################################################################################ -->
   <!-- ################################################################################################ -->
    <div class="content three_quarter">
      <div class="posts">
        <figure class="group">
          <div><img src="images/demo/500x280.png" alt=""></div>
          <figcaption>
            <h6 class="heading">Introducción al hacking</h6>
            <p>Curso de introducción al hacking, Animate a parender! </p>
            <footer><a class="btn" href="pages/basicHack.php">Read More &raquo;</a></footer>
          </figcaption>
        </figure>
        <!-- ################################################################################################ -->
      </div>
      <!-- ################################################################################################ -->
    </div>
<!-- ################################################################################################ -->


  <!-- ################################################################################################ -->
  <?php include('../plantillas/footer.php'); ?>
  <!-- ################################################################################################ -->
</body>

</html>