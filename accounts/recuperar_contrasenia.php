<?php
session_start();
include 'conection.php';
if (isset($_POST)) {
    session_destroy();
    header('location:./recuperar_contrasenia.html');
}
$email=$_POST['email'];
$sql="SELECT * FROM usuarios WHERE e-mail='$email'";

?>