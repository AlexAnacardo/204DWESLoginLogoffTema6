<?php
    
$oError=$_SESSION['error'];

if(isset($_REQUEST['volver'])){
    $_SESSION['paginaEnCurso']=$oError->getPaginaSiguiente();
    header('Location: indexLoginLogoffTema6.php');
    exit();
}

require_once $view['layout'];
?>
