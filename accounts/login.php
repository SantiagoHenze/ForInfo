<?php

include '../conection.php';
session_start();
/*
//verifica si activo es verdadero y te manda al index
if($_SESSION['activo']==true){
    header('Location:../index.html');
}
else {
    header('location:form_logueo.php');
	session_destroy();
}

if ((empty($_POST)) {
    session_destroy();
    header('Location:./login.html');
}

*/
$user=$_POST['user'];
$password=$_POST['password'];
$seleccion="SELECT COUNT(*) AS cuenta FROM usuarios WHERE name='$user' AND password='$password'";
$ejecutar=mysqli_query($con, $seleccion); 
$data = mysqli_fetch_array($ejecutar);
//comprobación 

if($data['cuenta'] > 0){
    $_SESSION['usuario']= $user;
    header('Location:../index.php');
}else{
    echo "DATOS INCORRECTOS";
}
if ($ejecutar){
    $data = mysqli_fetch_array($ejecutar);
    $_SESSION['activo']=true;
    $_SESSION['usuario']=$data['name'];
    $_SESSION['id']=$data['ID_Usuario'];
    $_SESSION['rango']=$data['rango'];
    header('Location:../index.php');
}
if ($ejecutar==false){
    //header('Location:./login.html');
    echo"ves bobo";
}
//si no existe te manda al registro

?>
