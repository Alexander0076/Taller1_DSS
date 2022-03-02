<?php
    require_once('registroDatosUsuario.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link type="text/css" rel="Stylesheet" href="css/EstilosRegistros.css">
    <title>Registro</title>
</head>
<body>
<head>

</head>
<nav></nav>
<section>
    <div class="container form">
        <div class="imgLogo">
            <img src="img/icone.png" width="70%" height="80%">
        </div>
        <form class="formularioR" method="$_POST" action="registroDatosUsuario.php" >
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text">Usuario</label>
                <input type="email" class="form-control" id="usuario" aria-describedby="emailHelp" required placeholder="Usuario">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text">Contraseña</label>
                <input type="password" class="form-control" id="pass" required placeholder="Contraseña">
            </div>
            <div class="mb-3 form-check">
                
                <h4 class="titulo">Terminos y condiciones</h4>
                <p class="info">
                    -No expresiones de agresion contra las demas personas. <br>
                    -no hacer uso de nuestra pagina con beneficios que no sean con el objetivo de la pagina.<br>
                    -Acepta que usemos la informacion ingresada, para utilización de muchas acciones que la empresa desea realizar.
                </p>
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Aceptar</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</section>
<footer></footer>
</body>
</html>