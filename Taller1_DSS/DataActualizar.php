<?php 
    
    session_start();
    $nuevoEvento = array();
    $nuevoEvento2 = array();
    $Usuario = $_SESSION['Usuario'];
    $NTitulo =$_POST['NTitulo'];
    $NFecha = $_POST['NFecha'];
    $NDescripcion = $_POST['NDescripcion'];
    $Data = array();
    $nuevoEvento = array($Usuario,$NTitulo,$NFecha,$NDescripcion);
    if (isset($_COOKIE['Eventos'])) {
        $Data = json_decode($_COOKIE['Eventos'],true);
    }else{
        setcookie('Eventos',json_encode(array()));
    } 
    
    $a = $_SESSION['actualizar'];
    $TitAc = $a;
foreach($Data as $key => &$value) {
    if ($TitAc == $value[1] && $Usuario == $value[0]) {
        $value = $nuevoEvento;
        unset($value);
        setcookie('Eventos',json_encode($Data));
        header("Location: inicio.php");
        break;
    }
    
}




?>