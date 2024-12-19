<?php
    /*
     * @version 2024/12/19
     * @author Alex Asensio Sanchez                          
     */
    
    $oFechaActual=new DateTime("now");
    if(!isset($_COOKIE['Idioma'])){
        setcookie('Idioma', 'es', $oFechaActual->getTimestamp()+(3600), "/");     
        header('location:indexLoginLogoffTema5.php');
    }
    
    
    if(isset($_REQUEST['login'])){
       header('location:codigoPHP/login.php');
       exit;
    }
            
    if(isset($_REQUEST['español'])){        
        setcookie('Idioma', 'es', $oFechaActual->getTimestamp()+(3600), "/");
        header('location:indexLoginLogoffTema5.php');
    }
    
    if(isset($_REQUEST['ingles'])){       
       setcookie('Idioma', 'en', $oFechaActual->getTimestamp()+(3600), "/"); 
       header('location:indexLoginLogoffTema5.php');       
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
         <header>
             <img id="logo" src="webroot/images/logo.png">
             <h1>Aplicacion Login logoff</h1>
            <form method='post'>                                                
                <div class='dropdown'>
                    <?php
                    $imagenIdioma = '';
                    switch ($_COOKIE['Idioma']) {
                        case 'es':
                            $imagenIdioma = 'españa.png';
                            break;

                        case 'en':
                            $imagenIdioma = 'uk.png';
                            break;
                        default:
                            $imagenIdioma = 'españa.png';
                            break;
                    }
                    ?>
                    <img src="webroot/images/<?php echo($imagenIdioma) ?>" style="width: 40px; height: 20px">
                    <div class='dropdown-content'>
                        <button type="submit" name='español' id='español'>
                            <img src="webroot/images/españa.png" style="width: 40px; height: 20px">
                        </button>
                        <button type="submit" name='ingles' id='ingles'>
                            <img src="webroot/images/uk.png" style="width: 40px; height: 20px">
                        </button>                        
                    </div>
                </div>
                <input type="submit" name='login' id='login' value='Login'>
            </form>
        </header>
        <main>
            <?php require_once $view[$_SESSION['paginaActiva']]; ?>
        </main>
        <footer>
            <p><a href="../index.html">Alex Asensio Sanchez</a></p>
            <p><a href="../204DWESProyectoDWES/indexProyectoDWES.php">DWES</a></p>
            <p><a target="blank" href="https://github.com/AlexAnacardo/204DWESLoginLogoffTema6.git">Repositorio del proyecto</a></p>
            <p><a target="blank" href="https://www.amazon.es">Pagina imitada</a></p>
        </footer>
     </body>
 </html>
