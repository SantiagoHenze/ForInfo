<?php 
require('conection.php');
session_start();

$busqueda=$_POST['busqueda']
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
  <body>

    <form action='verBusqueda.php' method='_POST'>
      <input type="hidden" name="busqueda" value="$busqueda">
      <input type="submit" name="">
    </form>

    <?php header('location:./indexbusqueda.php') ?>
  </body>
</html>
