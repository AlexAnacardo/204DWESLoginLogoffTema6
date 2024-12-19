<?php
    /*
     * @version 2024/12/19
     * @author Alex Asensio Sanchez                          
     */

    interface UsuarioDB{
        public static function validarUsuario($codUsuario, $password);
    }

