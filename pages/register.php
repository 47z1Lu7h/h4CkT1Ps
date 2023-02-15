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
<?php include('../plantillas/library.php'); ?>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <?php include('../plantillas/header.php'); ?>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row2 bgded overlay" style="background-image:url('../images/demo/backgrounds/02.png');">
    <div id="breadcrumb" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul>
      <li><a href="/h4CkT1Ps/index.php">Home</a></li>
      <li><a href="/h4CkT1Ps/pages/register.php">Register</a></li>
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
          <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET" enctype="multipart/form-data">
            <label for="username">UserName: <span>*</span></label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="id">Clave: <span>*</span></label>
            <input type="text" id="clave" name="clave" required>
            <br>
            <label for="nombre">Nombre: <span>*</span></label>
            <input type="text" id="nombre" name="nombre" required>
            <br>
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required>
            <br>
            <label for="id">Dirección: <span>*</span></label>
            <input type="text" id="id" name="id" required>
            <br>
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required>
            <br>
            <label for="formacion">Formación:</label>
            <input type="text" id="formacion" name="formacion" required>
            <br><br>
            <input type="submit" name="submit" value="Enviar"></br>
            <input type="reset" name="reset" value="Reset">
          </div>
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <h3><p> Ya tienes una cuenta?? -->> <a href="/h4CkT1Ps/pages/login.php">Inicia Sesion!! </a></p></h3>
      <div class="clear"></div>
    </main>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <?php include('../plantillas/footer.php'); ?>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="../layout/scripts/jquery.min.js"></script>
  <script src="../layout/scripts/jquery.backtotop.js"></script>
  <script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>