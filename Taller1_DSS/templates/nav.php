<?php

session_start();
$Data = array();

$varsesion = $_SESSION['Usuario'];

if ($varsesion == null || $varsesion = '') {
  header("Location:Index.php");
}
if (isset($_COOKIE['Eventos'])) {
  $Data = json_decode($_COOKIE['Eventos'], true);
} else {
  setcookie('Eventos', json_encode(array()));
}


?>
  <nav>
    <ul class="nav">
      <li><a class="a" href="inicio.php">Inicio</a></li>
      <li><a class="a" href="NuevosEventos.php">Crear Eventos</a></li>
      <li style="padding: 25px;" class="dropbtn" onclick="myFunction()">
        <img class="img" src="img/icone.png" alt="">
        <span><a href="#"><?php echo $_SESSION['Usuario'] ?></a></span>
        <ul id="myDropdown" class="dropdown-content">
          <li>
            <img class="imgSesion" src="img/icone.png" alt="">
            <p class="sesion"><?php echo $_SESSION['Usuario'] ?></p>
            <p class="sesion"><a class="nav-link" href="CerrarSesion.php">Cerrar Sesion</a></p>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <br><br><br><br><br>



  <script>
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  </script>