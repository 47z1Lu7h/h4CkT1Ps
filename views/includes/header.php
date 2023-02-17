<!DOCTYPE html>

<html>

<head>
<title>~ h4Ck-t1P5 ~</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="../../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <!-- ################################################################################################ -->
      <div class="fl_left">
        <ul>
          <li><i class="fa fa-star"></i> grupo 9 </li>
          <li><i class="fa fa-envelope-o"></i> info@h4Cktips.com</li>
        </ul>
      </div>
      <div class="fl_right">
        <ul>
          <li><a href="/h4CkT1Ps/index.php"><i class="fa fa-lg fa-home"></i></a></li>
          <?php if(!isset($_SESSION["login_user"])):?>
          <li><a href="../views/register.php">REGIST3R</a></li>
          <li><a href="../views/login.php">L@GIN</a></li>
          <?php else:?>
          <li><a href="../php/logout.php">SALIR</a></li>
          <?php endif;?>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <!-- ################################################################################################ -->
      <h1><a href="/h4CkT1Ps/index.php">H4Ck-T1p5</a></h1>
      <p><h>~ Resources & learn ~ </h></p>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row4">
    <nav id="mainav" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="/h4CkT1Ps/index.php">h4Ck~t1P5</a></li>
        <li><a class="drop" href="#">Páginas</a>
          <ul>
            <li><a href="/h4CkT1Ps/pages/pentest.php">pentest</a></li>
            <li><a href="/h4CkT1Ps/pages/tools.php">tools</a></li>
            <li><a href="/h4CkT1Ps/pages/vulns.php">vulns</a></li>
          </ul>
        </li>
        <li><a class="drop" href="/h4CkT1Ps/views/cursos.php">Cursos</a>
          <ul>
            <li><a class="drop" href="/h4CkT1Ps/pages/basico.php">Principiante</a>
              <ul>
                <li><a href="/h4CkT1Ps/pages/basicHack.php">Introducción al Hacking</a></li>
                <li><a href="/h4CkT1Ps/pages/noDisp.php">Personalización Linux</a></li>
              </ul>
            </li>
            <li><a class="drop" href="/h4CkT1Ps/pages/medio.php">Medio</a>
              <ul>
                <li><a href="/h4CkT1Ps/pages/webAttacks.php">Pentesting Web</a></li>
              </ul>
            </li>
            <li><a class="drop" href="/h4CkT1Ps/pages/avanzado.php">Avanzado</a>
              <ul>
                <li><a href="/h4CkT1Ps/pages/AD.php">Active Directory</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="/h4CkT1Ps/views/admin.php">Admin</a></li>
        <li><a href="/h4CkT1Ps/views/home.php">Home</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="../../layout/scripts/jquery.min.js"></script>
  <script src="../../layout/scripts/jquery.open_form.js"></script>
  <script src="../../layout/scripts/jquery.backtotop.js"></script>
  <script src="../../layout/scripts/jquery.mobilemenu.js"></script>
  <script src="../../layout/scripts/jquery.flexslider-min.js"></script>
</body>

</html>