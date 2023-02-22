<?php 
include('config.php'); 
include('arrays.php'); 

//functions
function clean($var){
  htmlspecialchars(trim(strip_tags($var))); 
}
function showArray($array) {

  $rdo = false;
  $i = 1;
  if (is_array($array) ) {
    echo "<table border='1'>";
    foreach($array as $fila) {
      echo "<tr>";
      foreach ($fila as $clave => $valor) {
        echo "<td> $valor</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
    $rdo = true;
  }
  return $rdo;
}

function mostrarArray($array) {

  $rdo = false;
  $i = 1;
  if (is_array($array) ) {
    echo "<table border='1'>
        <caption>Array List:</caption>";
    foreach($array as $fila) {
      echo "<tr>";
      foreach ($fila as $clave => $valor) {
        echo "<td> $valor</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
    $rdo = true;
  }
  return $rdo;
}

function fillArray($rows, $cols) {
  //Recorrido para encher o array
  $array = null;
  for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j< $cols; $j++) {
      $array[$i][$j] = $i + $j;
    }
  }
  return $array;
}

function show2Array($vector, $media) {

  $rdo = 0;
  $i = 1;
  if (is_array($vector) ) {
    echo "<table border='1'>\n
        <tr>
          <td></td>
          <th> field</th>
        </tr>\n";
    foreach($vector as $valor) {
      echo "<tr> 
          <th> field $i </th>
          <td> $valor </td>
          </tr>\n";
      $i++;
    }
    echo "<tr> 
        <th> TOTAL </th>
        <td> $media </td>
        </tr>\n
        </table>";
    $rdo = 1;
  }
  return $rdo;
}

//  ################################################################################################ -->
//  ################################################################################################ -->
//  ################################################################################################ -->
// functions carrito
function obtenerProductosEnCarrito()
{
    include('config.php'); 
    iniciarSesionSiNoEstaIniciada();
    $sentencia = $conn->prepare("SELECT productos.id, productos.nombre, productos.descripcion, productos.precio
    FROM productos
    INNER JOIN carrito_usuarios
    ON productos.id = carrito_usuarios.id_producto
    WHERE carrito_usuarios.id_sesion = ?");
    $idSesion = session_id();
    $sentencia->execute([$idSesion]);
    return $sentencia->fetchAll();
}
function quitarProductoDelCarrito($idProducto)
{
    include('config.php'); 
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();
    $sentencia = $conn->prepare("DELETE FROM carrito_usuarios WHERE id_sesion = ? AND id_producto = ?");
    return $sentencia->execute([$idSesion, $idProducto]);
}

function obtenerProductos()
{
  include('config.php'); 
  include('arrays.php');
    $sentencia = $conn->query("SELECT id, nombre, descripcion, precio FROM productos");
    return $sentencia->fetch_all();

}
function productoYaEstaEnCarrito($idProducto)
{
  include('config.php'); 
    $ids = obtenerIdsDeProductosEnCarrito();
    foreach ($ids as $id) {
        if ($id == $idProducto) return true;
    }
    return false;
}

function obtenerIdsDeProductosEnCarrito()
{
  include('config.php'); 
    iniciarSesionSiNoEstaIniciada();
    $sentencia = $conn->prepare("SELECT id_producto FROM carrito_usuarios WHERE id_sesion = ?");
    $idSesion = session_id();
    $sentencia->execute([$idSesion]);
    return $sentencia->fetch_All(PDO::FETCH_COLUMN);
}

function agregarProductoAlCarrito($idProducto)
{
  include('config.php'); 
    // Ligar el id del producto con el usuario a través de la sesión
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();
    $sentencia = $conn->prepare("INSERT INTO carrito_usuarios(id_sesion, id_producto) VALUES (?, ?)");
    return $sentencia->execute([$idSesion, $idProducto]);
}


function iniciarSesionSiNoEstaIniciada()
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
}

function eliminarProducto($id)
{
  include('config.php'); 
    $sentencia = $conn->prepare("DELETE FROM productos WHERE id = ?");
    return $sentencia->execute([$id]);
}

function guardarProducto($nombre, $precio, $descripcion)
{
  include('config.php'); 
    $sentencia = $conn->prepare("INSERT INTO productos(nombre, precio, descripcion) VALUES(?, ?, ?)");
    return $sentencia->execute([$nombre, $precio, $descripcion]);
}

?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
