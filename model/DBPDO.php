<?php
    class DBPDO{
        public static function ejecutaConsulta($sentenciaSQL,$parametros){
            try{
                $miDB = new PDO(CONEXION, USUARIO, CONTRASEÑA);
                
                $sql=$miDB->prepare($sentenciaSQL);
                
                $sql->execute($parametros);
                
                return $sql;
            } catch (PDOException $ex) {
                
            }
            finally{
                unset($miDB);
            }
        }
    }
?>
