<?php
    /*
     * @version 2024/12/19
     * @author Alex Asensio Sanchez                          
     */
    
    /**
     * Clase UsuarioPDO que implementa la interfaz UsuarioDB
     * 
     * Esta clase se usará para conectarse a la base de datos y trabajar en la tabla T01_Usuario     
     */
    class UsuarioPDO implements UsuarioDB{
    
    /**
     * Valida un usuario en la base de datos
     * 
     * Primero, establecemos la conexion usando las variables constantes definidas en el archivo confAPP.php, despues codificamos la contraseña (que consiste de
     * el codigo del usuario + su contraseña) en sha 256, preparamos el query que buscara si existe un usuario con el codigo y la contraseña especificados.
     * Se ejecuta la sentencia y se guarda el resultado en un objeto, si el valor de este objeto es valido, actualiza el numero total de conexiones
     * del usuario en la base de datos y devuelve el objeto con los datos del usuario. Si el valor del resultado de la consulta esta vacio, se devopvera null
     *      
     * @param string $codUsuario Código del usuario
     * @param string $password Contraseña del usuario
     * @return object|null Objeto del usuario si es válido, null en caso contrario
     */
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
    
    public static function registrarUltimaConexion(){
        RELLENAR
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
