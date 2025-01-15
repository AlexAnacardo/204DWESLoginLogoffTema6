<?php

if(isset($_REQUEST['volver'])){
    $_SESSION['paginaEnCurso']="inicioPrivado";
    header('Location: indexLoginLogoffTema6.php');
    exit();
}

require_once $view['layout'];
?>