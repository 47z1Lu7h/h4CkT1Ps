<!DOCTYPE html>
<html>

<head>
  <title>~h4Ck~t1P5~</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">
  <!-- ################################################################################################ -->
  <?php session_start();?>
  <?php include('views/includes/header.php'); ?>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
    <div id="pageintro" class="hoc clear">
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
      <div class="sectiontitle center">
        <h6 class="heading">Bienvenido a h4Ck-t1p5</h6>
        <p>Una web de hacking donde podras aprender sobre este apasionante tema</p>
      </div>
      <ul class="nospace group center">
        <li class="one_third first">
          <article><i class="btmspace-30 fa fa-3x fa-low-vision"></i>
            <h6 class="heading font-x1">Herramientas</h6>
            <p class="btmspace-30">Recopilación de las herramientas mas utilizdas por los hackers. [&hellip;]</p>
            <footer><a class="btn" href="/h4CkT1Ps/pages/tools.php">Read More &raquo;</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><i class="btmspace-30 fa fa-3x fa-paw"></i>
            <h6 class="heading font-x1">Vulnerabilidades</h6>
            <p class="btmspace-30">Aqui te mostramos algunas de las vulnerabilidades mas famosas. [&hellip;]</p>
            <footer><a class="btn" href="/h4CkT1Ps/pages/vulns.php">Read More &raquo;</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><i class="btmspace-30 fa fa-3x fa-cube"></i>
            <h6 class="heading font-x1">Pentesting</h6>
            <p class="btmspace-30"> Lista de recursos, paginas web y fuentes de información. [&hellip;]</p>
            <footer><a class="btn" href="/h4CkT1Ps/pages/pentest.php">Read More &raquo;</a></footer>
          </article>
        </li>
      </ul>
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row3">
    <div class="hoc container clear">
      <!-- ################################################################################################ -->
      <div class="sectiontitle center">
        <h6 class="heading">Cursos</h6>
        <p>Aprende con nosotros</p>
      </div>
      <div class="posts">
        <figure class="group">
          <div><img src="images/demo/500x280.jpg" alt=""></div>
          <figcaption>
            <h6 class="heading">Introducción al hacking</h6>
            <p>Curso de introducción al hacking, Animate a parender! </p>
            <footer><a class="btn" href="pages/basicHack.php">Read More &raquo;</a></footer>
          </figcaption>
        </figure>
        <!-- ################################################################################################ -->
        <figure class="group">
          <div><img src="images/demo/pentesWeb.jpg" alt=""></div>
          <figcaption>
            <h6 class="heading">Pentesting Web</h6>
            <p>Conoce los metodos de intrusión web mas comunes.</p>
            <footer><a class="btn" href="pages/webAttacks.php">Read More &raquo;</a></footer>
          </figcaption>
        </figure>
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>  
<!-- ################################################################################################ -->
<?php include('views/includes/footer.php'); ?>
<!-- ################################################################################################ -->
</body>

</html>