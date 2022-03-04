<?php
session_start();

$userName = $_POST['usuario'];
$userPassword = $_POST['pass'];

include('info-usuarios.php');

$usuario_info = getUsers();


foreach ($usuario_info as $key => $value) {

    $login = ($key === $userName && $value === $userPassword) ? true : false;

    if($login) break;
}
if($login) {
   $_SESSION['Usuario']=$userName;
    header("Location: index.php");
    exit();
} else {
    $errorLogin="Nombre de usurio o contraseña incorrecta";
    include_once 'IniciarSesion.php';
}







?>