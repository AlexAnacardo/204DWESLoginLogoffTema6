<?php
    /*
     * @version 2024/11/27
     * @author Alex Asensio Sanchez                          
     */
     
    session_start();
    
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
?>
