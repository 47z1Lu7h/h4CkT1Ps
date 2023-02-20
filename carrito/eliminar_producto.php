<?php
include('../php/functions.php'); 
include('../php/config.php'); 

if (!isset($_POST["id_producto"])) {
    exit("No hay datos");
}

eliminarProducto($_POST["id_producto"]);
header("Location: productos.php");

?>