<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Iniciar sesion</title>
</head>
<body>
<head>
<div class="form">
        <div class="d-flex justify-content-center pb-4 pt-4">
            <img src="img/icone.png" width="40%"  >
        </div>
        <form class="formularioR" method="post" action="validacion.php"  >

            <?php
            if(isset($errorLogin)){
                echo "<p style= color:#f7253a;>";
                echo $errorLogin;
                echo "</p>";
            }
            ?>
            <div class="mb-4">
                <label for="exampleInputEmail1" class="text-white">Usuario</label>
                <input type="text" class="form-control" name="usuario" aria-describedby="emailHelp" required placeholder="Usuario">
            </div>
            <div class="mb-3 pt-2">
                <label for="exampleInputPassword1" class="text-white">Contraseña</label>
                <input type="password" class="form-control" name="pass" required placeholder="Contraseña">
            </div>
          
            <div class="d-flex justify-content-center pt-4">
            <button type="submit" class="btn-lg btn-primary rounded-pill" name="ingresar">Ingresar</button>
            </div>
        </form>
</div>
</head>
<nav></nav>
<section></section>
<footer></footer>
</body>
</html>