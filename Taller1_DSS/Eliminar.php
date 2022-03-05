<?php
    session_start();
    $Data = array();
    $showEventos = array();
    $Usuario = $_SESSION['Usuario'];
    if (isset($_COOKIE['Eventos'])) {
        $Data = json_decode($_COOKIE['Eventos'],true);
    }else{
        setcookie('Eventos',json_encode(array()),10800);
    } 
    
    $TitEliminar = $_GET['evnt'];
    foreach ($Data as $key => $value) {
        if ($TitEliminar == $value[1] && $Usuario == $value[0]) {
         array_splice($Data,$key,1);
         break;
        }
    }
    setcookie('Eventos',json_encode($Data));
    header("Location: index.php");
?>