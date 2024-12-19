<?php
    // Comprobamos si pulsa el botón login
    if (isset($_REQUEST['login'])) {
        $_SESSION['paginaActiva'] = 'login';
        header('Location: indexLoginLogoffTema6.php');
        exit();
    }

    require_once $view['layout'];
?>
