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
  <?php include('../views/includes/header.php'); ?>
  <?php include('../views/functions.php'); ?>
  <?php include('../views/arrays.php'); ?>
  <!-- ################################################################################################ -->
  <div class="wrapper row2 bgded overlay" style="background-image:url('../images/demo/backgrounds/02.png');">
    <div id="breadcrumb" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="/h4CkT1Ps/index.php">Home</a></li>
        <li><a href="/h4CkT1Ps/views/cursos.php">Cursos</a></li>
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
      <div class="content">
      <!-- ################################################################################################ -->
      <div class="sidebar one_quarter first">
        <!-- ################################################################################################ -->
        <h6> Cursos Disponibles</h6>
        <nav class="posts">
          <ul>
            <li><a class="btn" href="cursos.php?nivel=basic">Nivel Básico&raquo;</a></br>
            </li>
            <li><a class="btn" href="cursos.php?nivel=medium">Nivel Medio&raquo;</a></br>
            </li>
            <li><a class="btn" href="cursos.php?nivel=advanced">Nivel Avanzado&raquo;</a></li>
          </ul>
        </nav>
        <!-- ################################################################################################ -->
        </div>
        </div>      
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <div class="content three_quarter">
        <!-- ################################################################################################ -->
        <figure class="group">
          <figcaption>
            <h6 class="heading">Descubre Nuestros Cursos </h6>
            <p><?php mostrarArray($cursos)?> </p><br>
            <footer><p> Curso basicHack->     <a class="btn" href="../pages/basicHack.php">Read More &raquo;</a></p></footer>
          </figcaption></br>
        </figure>
      </div>
  </div>
  </main>
  </div>
  <!-- ################################################################################################ -->
  <?php include('../views/includes/footer.php'); ?>
  <!-- ################################################################################################ -->
</body>

</html>