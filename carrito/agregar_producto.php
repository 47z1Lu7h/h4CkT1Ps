<!DOCTYPE html>

<html>
<head>
<title>Lolgin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    
</head>

<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php 
    session_start();
    include('../views/includes/header.php');
    include('../php/functions.php'); 
    include('../php/config.php'); 
?>
    
<div class="columns">
    <div class="column is-one-third">
        <h2 class="is-size-2">Nuevo producto</h2>
        <form action="guardar_producto.php" method="post">
            <div class="field">
                <label for="nombre">Nombre</label>
                <div class="control">
                    <input required id="nombre" class="input" type="text" placeholder="Nombre" name="nombre">
                </div>
            </div>
            <div class="field">
                <label for="descripcion">Descripción</label>
                <div class="control">
                    <textarea name="descripcion" class="textarea" id="descripcion" cols="30" rows="5" placeholder="Descripción" required></textarea>
                </div>
            </div>
            <div class="field">
                <label for="precio">Precio</label>
                <div class="control">
                    <input required id="precio" name="precio" class="input" type="number" placeholder="Precio">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button class="button is-success">Guardar</button>
                    <a href="productos.php" class="button is-warning">Volver</a>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- ################################################################################################ -->
<?php include('../views/includes/footer.php'); ?>
<!-- ################################################################################################ -->
</body>
</html>
