<?php

session_start();
$Data = array();

$varsesion=$_SESSION['Usuario'];

if($varsesion == null||$varsesion=''){
    header("Location:IniciarSesion.php");
}
if (isset($_COOKIE['Eventos'])) {
  $Data = json_decode($_COOKIE['Eventos'],true);
}else{
  setcookie('Eventos',json_encode(array()),10800);
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
<nav></nav>
<section>
  <?php 
  $showEventos = array();
  foreach ($Data as $items => $value) {
    if ($_SESSION['Usuario']  == $value[0]) {
        array_push($showEventos,$value);
    }
  }   
    foreach ($showEventos as $key => $value) {
      echo "<div>
      <div>
        <p>Titulo eventos: $value[1]</p>
      </div>
      <div></div>
      <a href='Eliminar.php?evnt=$value[1]'><button>Eliminar</button></a>
      <a href='Actualizar.php?evnt=$value[1]'><button>Actualizar</button></a>
      </div>";
    }
  
  
  ?>
  <div>
    <div>
      
    </div>
    <div>

    </div>
  </div>

</section>
    
</body>
</html>