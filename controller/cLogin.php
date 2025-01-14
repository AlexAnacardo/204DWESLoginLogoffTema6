<?php
    //Si el usuario ya se ha autenticado previamente y no ha cerrado el navegador, se entrara a la aplicacion directamente
    if(isset($_SESSION["usuarioDAW204LoginLogoffTema6"])){
        header('location:programa.php');
        exit;
    }
    
    //Si se pulsa el boton "volver", volveremos al indice de la aplicacion
    if(isset($_REQUEST['volver'])){
        $_SESSION['paginaEnCurso'] = 'inicioPublico';
        header('Location: indexLoginLogoffTema6.php');
        exit();             
    }
    
    //Si no hay ningun usuario autenticado en esta sesion, se entrara aqui
    if(isset($_REQUEST['botonLogin'])){  
        $oUsuarioEnCurso=UsuarioPDO::validarUsuario($_REQUEST['nombre'], $_REQUEST['passwd']);
        if($oUsuarioEnCurso!=null){                       
            //Guardamos el objeto usuario en la sesion actual
            $_SESSION["usuarioDAW204LoginLogoffTema6"] = $oUsuarioEnCurso;
            //Se nos redirecciona al programa            
            $_SESSION['paginaEnCurso'] = 'inicioPrivado';                              
            header('Location: indexLoginLogoffTema6.php');
            exit();
        }                                           
    }         
    
    require_once $view['layout'];     
        
?>

