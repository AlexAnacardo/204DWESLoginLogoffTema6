<?php
    /*
     * @version 2024/11/27
     * @author Alex Asensio Sanchez                          
     */
    $oUsuarioEnCurso=$_SESSION["usuarioDAW204LoginLogoffTema6"];
    $oFechaActual=new DateTime("now");

    if(!isset($_COOKIE['Idioma'])){
        setcookie('Idioma', 'es', $oFechaActual->getTimestamp()+(3600), "/"); 
        $_SESSION['paginaEnCurso'] = 'inicioPrivado';
        header('location:indexLoginLogoffTema6.php');
    }
               
    if(isset($_REQUEST['español'])){        
        setcookie('Idioma', 'es', $oFechaActual->getTimestamp()+(3600), "/");
        $_SESSION['paginaEnCurso'] = 'inicioPrivado';
        header('location:indexLoginLogoffTema6.php');
    }
    
    if(isset($_REQUEST['ingles'])){       
       setcookie('Idioma', 'en', $oFechaActual->getTimestamp()+(3600), "/"); 
       header('location:indexLoginLogoffTema6.php');       
    }
    /*
    if(!isset($_SESSION["usuarioDAW204LoginLogoffTema6"])){
        header('location:login.php');
        exit;
    }
    
    if(isset($_REQUEST['detalle'])){
       header('location:detalle.php');
       exit;
    }
    
    if(isset($_REQUEST['logoff'])){
       unset($_SESSION["usuarioDAW204LoginLogoffTema6"]);
       header('location:../indexLoginLogoffTema6.php');
       exit;
    }
    
    //Extraemos el usuario de la sesion y lo introducimos en una variable
    $oUsuarioEnCurso=$_SESSION["usuarioDAW204LoginLogoffTema6"];
    */   
        
    require_once $view['layout'];
?>
