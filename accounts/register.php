<?php
session_start();
include '../conection.php';
$user=$_POST['usuario'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO `usuarios`(`ID`, `name`, `e-mail`, `password`, `rango`) VALUES ('','$user','$email','$password','3')";
//aaaaaaa
if(isset($_POST)) {
    session_destroy();    
    echo "<script>alert('ESTÁ TODO MAL');</script>";
    header('Location:./register.html');
    session_destroy();
}
else {
    $ejecutar=mysqli_query($con, $sql); 
    header('Location:../index.php');
}
?>