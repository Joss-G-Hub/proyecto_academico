<?php
/*proporcionar una plantilla de configuracion para conectar la base de datos de mysql.*/
/*Este archivo noc ontiene contraseñas reales se puede cargar al git*/
#Establecer la direccion del servidor mysql

$host = "127.0.0.1";
$puerto = "3306";
#nombre de la base de datos
$baseDatos = "proyecto_academico_jg";
#usuario de ejemplo en sql
$usuario = "Academico_user";
#contraseña de administardor
$contraseña = "222005";
#renornar estos valores como si fuera un arreglo asociado
return[
    "host" => $host,
    "port" => $puerto,
    "database" => $baseDatos,
    "username" => $usuario,
    "password" => $contraseña
];
