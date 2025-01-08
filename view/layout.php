<?php
    /*
     * @version 2024/12/19
     * @author Alex Asensio Sanchez                          
     */
    
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
?>

<html id="index">
     <head>
        <meta charset="UTF-8">               
        <meta name="author" content="Alex Asensio Sanchez">
        <meta name="application-name" content="indice">
        <meta name="description" content="Indice tema 3">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="webroot/css/loginLogoff.css">       
        <title>Alex Asensio Sanchez</title>
     </head>
     <body>
        <?php require_once $view[$_SESSION['paginaEnCurso']]; ?>
        <footer>
            <p><a href="../index.html">Alex Asensio Sanchez</a></p>
            <p><a href="../204DWESProyectoDWES/indexProyectoDWES.php">DWES</a></p>
            <p><a target="blank" href="https://github.com/AlexAnacardo/204DWESLoginLogoffTema6.git">Repositorio del proyecto</a></p>
            <p><a target="blank" href="https://www.amazon.es">Pagina imitada</a></p>
        </footer>
     </body>
 </html>
