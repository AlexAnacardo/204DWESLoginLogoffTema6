<?php

    $oFechaActual=new DateTime("now");

    if(!isset($_COOKIE['Idioma'])){
        setcookie('Idioma', 'es', $oFechaActual->getTimestamp()+(3600), "/");     
        header('location:indexLoginLogoffTema6.php');
    }
               
    if(isset($_REQUEST['español'])){        
        setcookie('Idioma', 'es', $oFechaActual->getTimestamp()+(3600), "/");
        header('location:indexLoginLogoffTema6.php');
    }
    
    if(isset($_REQUEST['ingles'])){       
       setcookie('Idioma', 'en', $oFechaActual->getTimestamp()+(3600), "/"); 
       header('location:indexLoginLogoffTema6.php');       
    }
    
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
        $resultadoConsulta=UsuarioPDO::validarUsuario($_REQUEST['nombre'], $_REQUEST['passwd']);
        if($resultadoConsulta!=null){
            
            $oUsuarioEnCurso=new Usuario(
                    $resultadoConsulta->T01_CodUsuario,
                    $resultadoConsulta->T01_Password,
                    $resultadoConsulta->T01_DescUsuario,
                    $resultadoConsulta->T01_NumConexiones+1,
                    date_format(new DateTime("now"), "Y-m-d h:m:s"),
                    $resultadoConsulta->T01_FechaHoraUltimaConexion,
                    $resultadoConsulta->T01_Perfil
            );
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

