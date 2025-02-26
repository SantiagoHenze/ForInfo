<?php 
require('conection.php');
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./images/forinfoicon.png">  

<!--     FUENTE PARA LA PAGINA -->
    <style>@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap');</style> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<!--     FUENTE PARA TITULOS -->


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
      .material-symbols-outlined {
        font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 48
      }
    </style>


    <title>ForInfo | Discusiones</title>


     <!-- https://getbootstrap.com/docs/5.2/components/badge/ --> 



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body class="bodys">

<nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background-color: orange;" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">ForInfo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./acciones/agregarDiscusion.php">Agregar discusión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            Tus discusiones
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active">Usuario</a>
        </li>
        <li class="cerrarsesion">
          <a href="./cerrarsesion.php">Cerrar sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br>
<br>
<br>

<h1>Discusiones</h1>

<div class="searchbar">
  <form class="d-flex" action="./busqueda.php" role="search" method="post">
          <input class="text" name="busqueda" type="search" placeholder="Busca discusiones...">
          <input type="submit" value="BUSCAR"><!-- <button class='btn btn-outline-success'> <span class='material-symbols-outlined'>saved_search</span> </button>" -->
  </form>
</div>

<div class="content">

<div class="SeccionDiscusiones">

     <iframe src="./verDiscusiones.php" width=100% height=340% class="iframeDiscusiones"></iframe>

</div>

<div class="SeccionOpciones">
<div class="Opciones">
<div class="TituloOpciones">
    Seccion de anuncios:
</div>
<div class="ButtonsOpciones">
      <a href="">example</a>
</div>

</div>

</div>

</div>

<div class="void"> 
  <br> 
  <br> 
  <br> 
  <br> 
  <br> 
  <br> 
  <br> 
  <br> 
  <br>
  <br> 
  <br> 
  <br> 
  <br> 
  <br> 
  <br> 
  </div>

<footer class="Footers">

      <div class="footerCol1">

        <p>Condiciones</p>

        <a href="">Terminos y uso</a>
        <a href="./reglas.html">Reglas</a>

      </div>

      <div class="footerCol2">

        <p>Servicios</p>

        <a href="">Informar errores</a>
        <a href="">Reportar a un usuario</a>

      </div>

      <div class="footerCol3">

        <p>Empresa</p>

        <a href="creadores.html">¿Quienes somos?</a>
        <a href="">Biografia</a>

      </div>

</footer>


  </body>
</html>
