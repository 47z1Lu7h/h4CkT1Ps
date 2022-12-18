<!DOCTYPE html>

<html>

<head>
<title>~ h4Ck-t1P5 ~</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
<?php 
//arrays
$cursos = [
  "basic" => ["Introduccion a linux","Personalizacion del Enotorno", "Basic PE"],
  "medium" => ["Pentesting Web", "medium PE"],
  "advanced" => ["Active Directory", "Buffer Overflow", "Advanced PE"]
];

$users = array("admin", "pepe", "paco", "piko", "pepi");

$tools = array("GitHub3rs", "Pasword Crackers", "Proxies", "Expoloitation", "Imformation Gathering", "Port Scaning", "Packet Analizers", "Vulnerabiity Scanners", "Addons" );

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
        <caption>Contido da táboa</caption>";
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
          <th> Notas</th>
        </tr>\n";
    foreach($vector as $valor) {
      echo "<tr> 
          <th> Nota $i </th>
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

?>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="../layout/scripts/jquery.min.js"></script>
  <script src="../layout/scripts/jquery.open_form.js"></script>
  <script src="../layout/scripts/jquery.backtotop.js"></script>
  <script src="../layout/scripts/jquery.mobilemenu.js"></script>
  <script src="../layout/scripts/jquery.flexslider-min.js"></script>
</body>

</html>