<!DOCTYPE html>
<html>

<head>
  <title>~h4Ck~t1P5~</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
  <!-- ################################################################################################ -->
  <?php include('plantillas/header.php'); ?>
  <!-- ################################################################################################ -->
  
  <?php
   
  $tools=array();
  $=array( );
  $users=array("admin", "pepe", "paco", "pepi", "poco",);
  $cursos = [

    "basic" => ["bmw" => 7,
            "audi" => 25,
            "seat" => 3,
            "hyundai" => 4,
            "toyota" => 32],
    "medium" => ["bmw" => 20,
            "audi" => 27,
            "seat" => 45,
            "hyundai" => 37,
            "toyota" => 81],
    "advanced" => ["bmw" => 13,
            "audi" => 21,
            "seat" => 56,
            "hyundai" => 40,
            "toyota" => 21],
];

function clean(htmlspecialchars(trim(strip_tags()));

function superClean($var, $m = "")
  if (!isset($_REQUEST[$var])){
    $tmp = clean($_REQUEST[$var], ? "");
  } elseif (!is_array($_REQUEST[$var])){
    $tmp = clean($_REQUEST[$var], ENT_QUOTES, "UTF-8");
  } else {
    $tmp = $_REQUEST[$var];
    array_walk_recursive($tmp, function (& $valor)){
      $valor = clean($valor, ENT_QUOTES, "UTF-8")
    }
  }


  ?>

</body>

</html>