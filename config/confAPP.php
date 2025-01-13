<?php
require_once 'model/Usuario.php';
require_once 'model/UsuarioDB.php';
require_once 'model/UsuarioPDO.php';
require_once 'model/DBPDO.php';

$controller=[
    'inicioPublico' => 'controller/cInicioPublico.php',
    'inicioPrivado' => 'controller/cInicioPrivado.php',
    'login' => 'controller/cLogin.php'
];
        
$view=[
    'layout' => 'view/layout.php',
    'inicioPublico' => 'view/vInicioPublico.php',
    'inicioPrivado' => 'view/vInicioPrivado.php',
    'login' => 'view/vLogin.php'
];

