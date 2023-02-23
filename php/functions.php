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



?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
