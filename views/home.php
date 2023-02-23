<!DOCTYPE html>

<html>

<head>
  <title>h4Ck~T1p5</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="/h4CkT1Ps/assets/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
</head>

<body id="top">
  <!-- ################################################################################################ -->
  <?php
    session_start();
    if(!isset($_SESSION["username"]) || $_SESSION["username"]==null){
        print "<script>alert(\"You need to Log in mate!\");window.location='login.php';</script>";
    }
    include('includes/header.php');
  ?>
  <!-- ################################################################################################ -->
  <div class="wrapper row2 bgded overlay" style="background-image:url('../assets/images/demo/backgrounds/02.png');">
    <div id="breadcrumb" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="/h4CkT1Ps/index.php"><strong> index  </strong></a></li>
        <li><a href="/h4CkT1Ps/views/home.php">Home</a></li>
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
        <h6><em>hELLO <?php echo $_SESSION["username"]?> </em></h6>
        <nav class="sdb_holder">      
          <ul>
            <li><a class="" href=""><strong>  Explora Nuestra w3b! </strong></a><br>
              <ul>
              <li><a href="/h4CkT1Ps/views/pages/cursos.php">Cursos</a></li>
              <li><a href="/h4CkT1Ps/views/pages/tools.php">T@@l5</a></li>
              <li><a href="/h4CkT1Ps/views/pages/vulns.php">VuLN5</a></li>
              <li><a href="/h4CkT1Ps/views/pages/pentest.php">P3nt3st1ng</a></li>
              <li><a href="/h4CkT1Ps/views/pages/users.php">Us3rs</a></li>
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
        <h1><strong> Welcome back <?php echo $_SESSION["username"]?>!!</strong></h1>
        <img class="imgr borderedbox inspace-5" src="" alt="test">
        <p><strong> ¡Hey!! </strong></p>
        <p> This is your User Panel..<br><br><em>
            ~ Your USER_ID is: <?php echo $_SESSION["user_id"]; ?>
            ~ And Your Login Name: <?php echo $_SESSION["username"]; ?></p>
            ~ And Your full Name: <?php echo $_SESSION["fullname"]; ?></p>
            ~ And Your email: <?php echo $_SESSION["email"]; ?></p><br>
        <!-- ################################################################################################ -->
      </div></em>
</main>
  </div>
  <!-- ################################################################################################ -->
  <?php include('../views/includes/footer.php'); ?>
  <!-- ################################################################################################ -->
</body>
</html>
