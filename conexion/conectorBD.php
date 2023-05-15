<?php

function conectar(){
    // DEFINIMOS LOS DATOS DE LA CONEXION
    $host = "localhost"; 
    $usuario = "root";
    $pass = "";
    $basedatos = "bdcrud"; 

    // ESTABLECEMOS LA CONEXION CON LOS DATOS ESTABLECIDOS
    $miConexion = mysqli_connect($host, $usuario, $pass);

    // ABRIMOS LA BASE DE DATOS 
    mysqli_select_db($miConexion, $basedatos);

    if (!$miConexion) {
        echo("Error al crear la conexion"); 
    }
    // DEVOLVEMOS LA CONEXION 
    return $miConexion; 
}
?>