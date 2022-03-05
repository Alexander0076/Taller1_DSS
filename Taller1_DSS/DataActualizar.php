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
    $TitActu = $_GET['evnt'];
    echo $TitActu;
    foreach ($Data as $key => $value) {
        if ($TitActu == $value[1] && $Usuario == $value[0]) {
            array_splice($value,0,count($value),$Usuario);
            array_splice($value,1,count($value),$NTitulo);
         break;
        }
    }
    
    setcookie('Eventos', json_encode($Data));
    header("Location: inicio.php");





?>