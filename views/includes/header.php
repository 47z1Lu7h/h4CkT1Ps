<!DOCTYPE html>

<html>

<head>
<title>~ h4Ck-t1P5 ~</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="/h4CkT1Ps/assets/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">
  <!-- ################################################################################################ -->
  <em>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <!-- ################################################################################################ -->
      <div class="fl_left">
        <ul>
          <li><i class="fa fa-user-secret"  ></i> grupo 9 </li>
          <li><i class="fa fa-envelope-o"></i> info@h4Cktips.com</li>
        </ul>
      </div>
      <div class="fl_right">
        <ul>
          <li><a href="/h4CkT1Ps/index.php"><i class="fa fa-lg fa-home"></i></a></li>
          <?php if(!isset($_SESSION["username"])):?>
          <li><a href="../views/register.php">REGIST3R</a></li>
          <li><a href="/h4CkT1Ps/views/login.php">L@GIN</a></li>
          <?php else:?>
          <li><a> Welcome <?php echo($_SESSION["username"])?>! </a></li>
          <li><a href="/h4CkT1Ps/views/cart/view_cart.php"><i class="fa fa-lg fa-shopping-bag"></i></a></li>
          <li><a href="/h4CkT1Ps/php/logout.php">SALIR</a></li>
          <?php endif;?>
        </ul>
      </div></em>
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
        <li class="active"><a href="/h4CkT1Ps/index.php"><strong>index</strong></a></li>
        <li><a class="drop" href="#">Páginas</a>
          <ul>
            <li><a href="/h4CkT1Ps/views/pages/pentest.php">pentest</a></li>
            <li><a href="/h4CkT1Ps/views/pages/tools.php">tools</a></li>
            <li><a href="/h4CkT1Ps/views/pages/vulns.php">vulns</a></li>
          </ul>
        </li>
        <li><a class="drop" href="/h4CkT1Ps/views/pages/cursos.php">Cursos</a>
          <ul>
            <li><a class="drop" href="/h4CkT1Ps/views/pages/basico.php">Principiante</a>
              <ul>
                <li><a href="/h4CkT1Ps/views/pages/basicHack.php">Introducción al Hacking</a></li>
                <li><a href="/h4CkT1Ps/views/pages/noDisp.php">Personalización Linux</a></li>
              </ul>
            </li>
            <li><a class="drop" href="/h4CkT1Ps/views/pages/medio.php">Medio</a>
              <ul>
                <li><a href="/h4CkT1Ps/views/pages/webAttacks.php">Pentesting Web</a></li>
              </ul>
            </li>
            <li><a class="drop" href="/h4CkT1Ps/views/pages/avanzado.php">Avanzado</a>
              <ul>
                <li><a href="/h4CkT1Ps/views/pages/AD.php">Active Directory</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="/h4CkT1Ps/views/admin.php">Admin</a></li>
        <li><a href="/h4CkT1Ps/views/home.php">Home</a></li>
        <li><a class="fa fa-shopping-cart" class="" href="/h4CkT1Ps/views/cart"> ~ <strong>  Merch! </strong> </a></li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="/h4CkT1Ps/assets/layout/scripts/jquery.min.js"></script>
  <script src="/h4CkT1Ps/assets/layout/scripts/jquery.open_form.js"></script>
  <script src="/h4CkT1Ps/assets/layout/scripts/jquery.backtotop.js"></script>
  <script src="/h4CkT1Ps/assets/layout/scripts/jquery.mobilemenu.js"></script>
  <script src="/h4CkT1Ps/assets/layout/scripts/jquery.flexslider-min.js"></script>
</body>

</html>