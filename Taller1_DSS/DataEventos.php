<?php 
    session_start();
    $Data = array();
    $showEventos = array();
    $Usuario = $_SESSION['Usuario'];
    $TituloEvento = $_POST['titulo'];
    $FechaEvento = $_POST['fecha'];
    $DescripcionEvento = $_POST['descripcion'];  
    if (isset($_COOKIE['Eventos'])) {
        $Data = json_decode($_COOKIE['Eventos'],true);
    }else{
        setcookie('Eventos',json_encode(array()),10800);
    }    
    if ($TituloEvento !== "") {
    $Eventos = array($Usuario, $TituloEvento, $FechaEvento,$DescripcionEvento);    
    array_push($Data,$Eventos);
    setcookie('Eventos',json_encode($Data),10800);
    header("Location: index.php");
    }

    foreach ($Data as $items => $value) {
        if ($Usuario == $value[0]) {
            array_push($showEventos,$value);
        }
    }    
    
?>