<?php
    /*
    //Si el usuario ya se ha autenticado previamente y no ha cerrado el navegador, se entrara a la aplicacion directamente
    if(isset($_SESSION["usuarioDAW204LoginLogoffTema6"])){
        header('location:programa.php');
        exit;
    }
    
    //Si se pulsa el boton "volver", volveremos al indice de la aplicacion
    if(isset($_REQUEST['volver'])){
       header('location:../indexLoginLogoffTema6.php');
       exit;
    }
    */
    //Si no hay ningun usuario autenticado en esta sesion, se entrara aqui
    if(isset($_REQUEST['botonLogin'])){                              
            try {
            //Se establece la conexion
            $miDB = new PDO(CONEXION, USUARIO, CONTRASEÑA);
            
                   
            //Concatenamos el usuario+la contraseña y lo codificamos con SHA256
            $contraseñaCodificada=hash('sha256', $_REQUEST['nombre'] . $_REQUEST['passwd']);                        
            
            //Solicitamos los datos del usuario          
            $sql = $miDB->prepare(<<<FIN
                                    select * from T01_Usuario where T01_CodUsuario='{$_REQUEST['nombre']}' and T01_Password= '{$contraseñaCodificada}'
                                  FIN);
            $sql->execute();
            
           
            //Guardamos el usuario en un objeto
            $oUsuarioEnCurso = $sql->fetchObject();
            //Si la contraseña introducida por el usuario y la correspondiente en la base de datos son la misma, se entrara en el if
            if (isset($oUsuarioEnCurso->T01_CodUsuario)) {
                //Se actualizan el numero total de conexiones del usuario
                $sql2 = $miDB->prepare("update T01_Usuario set T01_NumConexiones=T01_NumConexiones+1, T01_FechaHoraUltimaConexion=now() where T01_CodUsuario= ? ");                
                $sql2->execute([$_REQUEST['nombre']]);
                
                //Guardamos el usuario en la sesion actual
                $_SESSION["usuarioDAW204LoginLogoffTema6"]=$oUsuarioEnCurso;
                
                //Se nos redirecciona al programa            
                $_SESSION['paginaEnCurso'] = 'inicioPrivado'; 
                require_once $view['layout'];
            }
            
            else{ 
                $_SESSION['paginaEnCurso'] = 'inicioPrivado';
                require_once $view['layout'];                        
            }
                         
        } catch (PDOException $ex) {
            echo($ex->getMessage());            
        } finally {
            unset($miDB);            
        }  
        
        $_SESSION['paginaEnCurso'] = 'inicioPrivado';
        require_once $view['layout'];
    }
?>
