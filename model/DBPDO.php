<?php
    class DBPDO{
        public static function ejecutaConsulta($sentenciaSQL,$parametros=null){
            try{
                $miDB = new PDO(CONEXION, USUARIO, CONTRASEÑA);
                
                $sql=$miDB->prepare($sentenciaSQL);
                
                $sql->execute($parametros);
                
                return $sql;
            } catch (PDOException $ex) {
                $error=new ErrorApp(
                        $ex->getCode(),
                        $ex->getMessage(),
                        $ex->getFile(),
                        $ex->getLine(),
                        "inicioPrivado"
                );
                $_SESSION['error']=$error;
                $_SESSION['paginaEnCurso']='error';
                
                header('Location: indexLoginLogoffTema6.php');
                exit();
            }
            finally{
                unset($miDB);
            }
        }
    }
?>
