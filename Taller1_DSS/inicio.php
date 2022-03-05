<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<?php 
  include_once 'templates/nav.php';
?>

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
      <div class='row'>
      <div class='col-6'>
      <p>Titulo evento: $value[1]</p>
    </div>
    <div  class='col-6'>
      <p>Fecha de evento: $value[2]</p>
    </div>
    <div>
      <p>
      Descripción de evento: $value[3]
      </p>
    </div>
      </div>
      </div>
      <a href='Eliminar.php?evnt=$value[1]'><button>Eliminar</button></a>
      <a href='actualizar.php?evnta=$value[1]'><button>Actualizar</button></a>
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