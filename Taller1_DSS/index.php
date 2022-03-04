<?php
session_start();

$varsesion=$_SESSION['Usuario'];

if($varsesion == null||$varsesion=''){
    header("Location:IniciarSesion.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand">
  <h2>Bienvenido <?php echo $_SESSION['Usuario'] ?></h2>
  </a>
  <a href="NuevosEventos.php">Crear Eventos</a>
  
  <a class="nav-link" href="CerrarSesion.php">Cerrar Sesion </a>
</nav>
<header>

</header>
    
</body>
</html>