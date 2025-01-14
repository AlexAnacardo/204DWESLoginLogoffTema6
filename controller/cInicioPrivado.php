<?php
    /*
     * @version 2024/11/27
     * @author Alex Asensio Sanchez                          
     */
    $oUsuarioEnCurso=$_SESSION["usuarioDAW204LoginLogoffTema6"];
    
    /*
    if(!isset($_SESSION["usuarioDAW204LoginLogoffTema6"])){
        header('location:login.php');
        exit;
    }
    */
    if(isset($_REQUEST['detalle'])){
       $_SESSION['paginaEnCurso'] = 'detalle';
        header('Location: indexLoginLogoffTema6.php');
        exit(); 
    }
     
    if(isset($_REQUEST['error'])){              
       crear nuevo obj error y usar clases cError vError y ErrorApp
    }
    
    if(isset($_REQUEST['logoff'])){
       session_destroy();       
       header('location: indexLoginLogoffTema6.php');       
       exit;
    }
    /*
    //Extraemos el usuario de la sesion y lo introducimos en una variable
    $oUsuarioEnCurso=$_SESSION["usuarioDAW204LoginLogoffTema6"];
    */   
    
    $avInicioPrivado = [
        'descUsuario' => $oUsuarioEnCurso->getDescUsuario(),
        'numConexiones' => $oUsuarioEnCurso->getNumAccesos(),
        'fechaHoraUltimaConexionAnterior' => $oUsuarioEnCurso->getFechaHoraUltimaConexion()
    ];
    
    require_once $view['layout'];
?>
