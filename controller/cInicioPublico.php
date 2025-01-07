<?php
    // Comprobamos si pulsa el botón login    
    if (isset($_REQUEST['login'])) {
        require_once $controller[$_SESSION['paginaEnCurso']];
        $_SESSION['paginaEnCurso'] = 'login';         
    }

    require_once $view['layout'];
    
?>
