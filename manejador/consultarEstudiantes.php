<?php

include('../conexion/metodos.php'); 

$sql_consulta = "select * from alumno"; 

$resultado = consultar($sql_consulta); 

if ($resultado) {
    $tabla_estudiantes = "<table>";
    while ($fila = $resultado->fetch_assoc()) {
        $tabla_estudiantes .= "<tr><td>" . $fila['cod_estudiante'] . "</td><td>" . $fila['dni'] . "</td><td>" . $fila['nombres'] . "</td> <td>" . $fila['apellidos'] . "</td></tr>";
    }
    $tabla_estudiantes .= "</table>";

    // Imprimir la tabla en la página
    echo $tabla_estudiantes;
}else{
    echo "error"; 
}
?>