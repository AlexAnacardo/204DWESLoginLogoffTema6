<?php
    /*
     * @version 2024/12/19
     * @author Alex Asensio Sanchez                          
     */

     class UsuarioPDO implements UsuarioDB{
         
    public static function validarUsuario($codUsuario, $password) {
        try {
            //Se establece la conexion
            $miDB = new PDO(CONEXION, USUARIO, CONTRASEÑA);

            //Concatenamos el usuario+la contraseña y lo codificamos con SHA256
            $contraseñaCodificada = hash('sha256', $codUsuario . $password);

            //Solicitamos los datos del usuario          
            $sql = $miDB->prepare(<<<FIN
                                  select * from T01_Usuario where T01_CodUsuario='{$codUsuario}' and T01_Password= '{$contraseñaCodificada}'
                                  FIN);
            $sql->execute();

            //Guardamos el usuario en un objeto
            $oUsuarioEnCurso = $sql->fetchObject();
            //Si la contraseña introducida por el usuario y la correspondiente en la base de datos son la misma, se entrara en el if
            if (isset($oUsuarioEnCurso->T01_CodUsuario)) {
                //Se actualizan el numero total de conexiones del usuario
                $sql2 = $miDB->prepare("update T01_Usuario set T01_NumConexiones=T01_NumConexiones+1, T01_FechaHoraUltimaConexion=now() where T01_CodUsuario= ? ");
                $sql2->execute([$codUsuario]);

                return $oUsuarioEnCurso;
            }
            else{
                return null;
            }
        } catch (PDOException $ex) {
            echo($ex->getMessage());
        } finally {
            unset($miDB);
        }
    }
    /*
    public static altaUsuario(){

    }

    public static modificarusuario(){

    }

    public static borrarUsuario(){

    }

    public static validarCodNoExiste(){

    }
    */    
}
