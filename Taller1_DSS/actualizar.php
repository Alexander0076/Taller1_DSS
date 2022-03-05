<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Actualizar</title>
</head>
<body class="b">
<?php 
  include_once 'templates/nav.php';
?>
<section >
<?php        
            $a = $_GET['evnta'];
            $_SESSION['actualizar']=$a;
         ?>  
    <div class="formdiv f">
        <form class="form" method="post" action="DataActualizar.php">
           <div class="mb-4">
                <label for="exampleInputEmail1"  class="label">Ingrese nuevo titulo de evento: </label>
                <input name="NTitulo" class="form-control" placeholder="Nuevo titulo" require type="text">
           </div>
           <div class="mb-4">
                <label for="exampleInputEmail1"  class="label">Ingrese nueva fecha de evento: </label>
                <input name="NFecha" class="form-control" placeholder="Nueva fecha" require type="date">
           </div>
           <div class="mb-4">
                <label for="exampleInputEmail1"  class="label">Ingrese nueva descripción de evento: </label><br>
                <textarea rows="5" class="texta form-control" name="NDescripcion" cols="94" required placeholder="Descripción"></textarea>
           </div>
        
           <div class="d-flex justify-content-center">
            <button type="submit" class="btn-lg btn-primary rounded-pill" name="ingresar">Ingresar</button>
            </div>

        </form>
    </div>
</section>
    
</body>
</html>