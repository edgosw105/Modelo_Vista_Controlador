<?php

include('conectorBD.php'); 
 

function consultar($sentencia){
    $con = conectar();
    $resultado = mysqli_query($con, $sentencia); 
    if ($resultado) {
        return $resultado; 
    }else{
        return false;
    }
}

function operacion($sentencia){
    $con = conectar();
    $resultado = mysqli_query($con, $sentencia); 
    if ($resultado){
        return true; 
    }else{
        return false; 
    }
}

?>