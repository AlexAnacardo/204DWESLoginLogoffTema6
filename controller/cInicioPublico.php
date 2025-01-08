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
    // Comprobamos si pulsa el botón login    
    if (isset($_REQUEST['login'])) {
        $_SESSION['paginaEnCurso'] = 'login';
        header('Location: indexLoginLogoffTema6.php');
        exit();         
    }

    require_once $view['layout'];    
?>
