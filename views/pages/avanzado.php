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
  <?php session_start();?>
  <?php include('../includes/header.php'); ?>
  <!-- ################################################################################################ -->
  <div class="wrapper row2 bgded overlay" style="background-image:url('../assets/images/demo/backgrounds/02.png');">
    <div id="breadcrumb" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="/h4CkT1Ps/index.php"><strong> index  </strong></a></li>
        <li><a href="/h4CkT1Ps/views/pages/cursos.php">Cursos</a></li>
        <li><a href="/h4CkT1Ps/views/pages/avanzado.php">Avanzado</a></li>
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
        <h6> Cursos Disponibles</h6>
        <nav class="sdb_holder">      
          <ul>
            <li><a class="drop" href="/h4CkT1Ps/views/pages/basico.php">Nivel Básico</a>
              <ul>
              <li><a href="/h4CkT1Ps/views/pages/basicHack.php">Introduccion al Hacking</a></li>
                <li><a href="/h4CkT1Ps/views/pages/noDisp.php">Personalización Linux</a></li>
              </ul>
            </li>
            <li><a href="/h4CkT1Ps/views/pages/medio.php">Nivel Medio</a>
              <ul>
                <li><a href="/h4CkT1Ps/views/pages/webAttacks.php">Pentesting Web</a></li>
              </ul>
            </li>
            <li><a href="/h4CkT1Ps/views/pages/avanzado.php">Nivel Avanzado</a></li>
              <ul>
                <li><a href="/h4CkT1Ps/views/pages/AD.php">Active Directory</a></li>
              </ul>
          </ul>
        </nav>
        <!-- ################################################################################################ -->
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <div class="content three_quarter">
        <!-- ################################################################################################ -->
        <h1><strong> Nivel Avanzado </strong></h1>
        <div> <p><h2>Curso de Active Directory</h2></p>
              <img class="imgr borderedbox inspace-5" src="" alt="test">
              <p> </p>
              <p>alalala<a href="/h4CkT1Ps/views/pages/AD.php"> Aquí</a>, muchas gracias :)</p>
        </div>   
        <!-- ################################################################################################ -->
      </div>
    </main>
  </div>
  </div>
  <!-- ############################################################################################### -->
  <?php include('../includes/footer.php'); ?>
  <!-- ################################################################################################ -->
</body>
</html>
