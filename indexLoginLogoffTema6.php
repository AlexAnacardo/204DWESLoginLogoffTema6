<?php
    //Incluimos el fichero de conexion a la base de datos
    require_once("config/confDBPDO.php");
    require_once("config/confAPP.php");
    require_once('config/confDBPDO.php'); 
    
    //Iniciamos la sesion
    session_start();
    $_SESSION['paginaEnCurso'] = 'inicioPublico';
    if(!isset($_SESSION['paginaEnCurso'])){
        $_SESSION['paginaEnCurso'] = 'inicioPublico';
    }
    
    require_once $controller[$_SESSION['paginaEnCurso']];
?>