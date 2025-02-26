<?php 
session_start();
require ('conection.php');
$select="SELECT usu.name, dis.tags, dis.fecha, dis.discusion, dis.contenido, dis.imagen FROM usuarios AS usu INNER JOIN discusiones AS dis ON usu.ID_Usuario = dis.id_usuario";
$ejecucion=mysqli_query($con, $select);
// $select2="SELECT usu.name, comen.comentario, comen.fecha FROM usuarios AS usu INNER JOIN comentarios AS comen ON usu.ID_Usuario = comen.id_usuario;";
// $ejecucion2=mysqli_query($con, $select2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./images/forinfoicon.png">  
    <title>...</title>
</head>
<body class="bodys">



<?php while ($contenido=mysqli_fetch_array($ejecucion)) { ?>

<div class="SeccionDiscusiones">

    <div class="discusion">

            <div class="discusioninfo">
                <P><?php echo $contenido['name']; ?> * <?php echo $contenido['tags']; ?> * <?php echo $contenido['fecha']; ?></P>
            </div>

        <div class="DiscusionUsuario">
            <p> <b> <?php echo $contenido['discusion']; ?> </b> </p>
            <p><?php echo $contenido['contenido']; ?></p>
            <img src="data:imagen/jpg;base64,<?php echo base64_encode($contenido['imagen']) ?>" width="50x50" alt="imagen">
        </div>

        <div class="OpcionesDiscusion">
            <a href="" class="ButtonOpcionesDeDiscusion">RESPONDER</a>
            <a href="" class="ButtonOpcionesDeDiscusion">LIKE</a>
            <a href="" class="ButtonOpcionesDeDiscusion">DISLIKE</a>
            <a href="" class="ButtonOpcionesDeDiscusion">COMPARTIR</a>
        </div>

        <div class="comentarios">

<!--             <?php// while ($contenido=mysqli_fetch_array($ejecucion2)) { ?>
                <div class="comentario">
                    <p><?php //echo $contenido['name']; ?> <?php echo $contenido['fecha']; ?></p>
                    <p><?php //echo $contenido['comentario']; ?></p>
                </div>
            <?php// } ?> -->

        </div>

    </div>

</div>



<?php } ?>
    
</body>
</html>