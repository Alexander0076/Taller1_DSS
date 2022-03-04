<?php 
    $Usuario = $_POST[''];
    $TituloEvento = $_POST['titulo'];
     if($TituloEvento != null){
        
    }else{
        $errorTitulo = "Ingrese un titulo";
        include_once 'NuevosEventos.php';
    }
    $FechaEvento = $_POST['fecha'];
    if($FechaEvento != null){
        
    }else{
        $errorFecha = "Seleccione una fecha";
        include_once 'NuevosEventos.php';
    }
    $DescripcionEvento = $_POST['descripcion'];  
    if($DescripcionEvento != null){
        
    }else{
        $errorDes = "Agrege una descripcion";
        include_once 'NuevosEventos.php';
    }

?>