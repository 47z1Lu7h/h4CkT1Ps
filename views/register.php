<!DOCTYPE html>

<html>
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <?php

  if(isset($_POST['submit'])){
    // Obtener valores de los campos del formulario
    $username = $_POST['username'];
    $clave = $_POST['clave'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $formacion = $_POST['formacion'];

    // Validar los campos del formulario
    if(empty($username) || empty($nombre) || empty($apellidos) || empty($clave) || empty($telefono) ){
      echo "Los campos con * rojo del formulario son obligatorios, pro favor complete los datos que faltan";
    } else {
      // Conectarse a la base de datos
      $conn = mysqli_connect("host", "root", "yepale123", "hacktips");

      // Comprobar conexión
      if(!$conn){
        die("Error de conexión: " . mysqli_connect_error());
      }

      // Preparar consulta para insertar datos en la base de datos
      $query = "INSERT INTO users (username, nombre, apellidos, clave, telefono, formacion) VALUES ('$username', '$nombre', '$apellidos', '$clave', '$telefono', '$formacion')";

      // Ejecutar consulta
      if(mysqli_query($conn, $query)){
        echo "Registro exitoso";
      } else {
        echo "Error al registrarse: " . mysqli_error($conn);
      }

      // Cerrar conexión
      mysqli_close($conn);
      }
    }
  ?>

</head>

<body id="top">
<?php include('../views/arrays.php'); ?>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <?php include('../views/includes/header.php'); ?>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row2 bgded overlay" style="background-image:url('../images/demo/backgrounds/02.png');">
    <div id="breadcrumb" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul>
      <li><a href="/h4CkT1Ps/index.php">Home</a></li>
      <li><a href="/h4CkT1Ps/views/register.php">Register</a></li>
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
      <div class="content">
        <!-- ################################################################################################ -->
        <h1>Register</h1>
        <img class="imgr borderedbox inspace-1" src="../images/demo/imgr.jpg" alt="">
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <form role="form" name="registro" action="../php/registro.php" method="post">
	    	  <div class="form-group">
		    <label for="username">Nombre de usuario</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
	    	  <div class="form-group">
		    <label for="fullname">Nombre Completo</label>
		    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre Completo">
		  </div>
		      <div class="form-group">
		    <label for="email">Correo Electronico</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
		  </div>
	    	  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		  </div>
	    	  <div class="form-group">
		    <label for="confirm_password">Confirmar Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a">
		  </div></br>
      <!-- ################################################################################################ -->
		  <button type="submit" class="btn btn-default">Registrar</button>
		</form>
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <h3><p> Ya tienes una cuenta?? -->> <a href="/h4CkT1Ps/views/login.php">Inicia Sesion!! </a></p></h3>
      <div class="clear"></div>
    </main>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <?php include('../views/includes/footer.php'); ?>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="../layout/scripts/jquery.min.js"></script>
  <script src="../layout/scripts/valida_registro.js"></script>
  <script src="../layout/scripts/jquery.backtotop.js"></script>
  <script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>