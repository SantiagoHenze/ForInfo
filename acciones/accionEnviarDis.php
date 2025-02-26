<?php
    session_start();
    include('conection.php');

    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $tags = $_POST['tags'];
    $iamgen = $_FILES["imagen"], ["tmp_name"];
    $imagen2= addslashes(file_get_contents($imagen));

    $sql='INSERT INTO `discusiones`(`ID_Discusion`, `discusion`, `contenido`, `fecha`, `id_usuario`, `Tags`, `imagen`) VALUES ('','$titulo','$contenido','','','$tags', '$imagen2')';
    $ejecutar=mysqli_query($sql);
    header('location:..\./index.php');
?>