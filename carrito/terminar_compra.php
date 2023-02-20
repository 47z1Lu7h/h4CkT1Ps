<?php

include('../php/functions.php'); 
include('../php/config.php'); 

$productos = obtenerProductosEnCarrito();
# Puede que solo quieras los ids, para ello invoca a obtenerIdsDeProductosEnCarrito();
var_dump($productos);

?>