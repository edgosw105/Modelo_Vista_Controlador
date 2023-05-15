<?php

    include('../conexion/metodos.php'); 
    $codigo = $_POST["codigo"]; 
    $dni = $_POST["dni"]; 
    $nombre = $_POST["nombre"]; 
    $apellido = $_POST["apellido"]; 

    //Consulto para saber si ya existe
    $sql_consulta = "select * from alumno where cod_estudiante = '$codigo'"; 
    
    $resultado_consulta = consultar($sql_consulta); 
    if(mysqli_fetch_array($resultado_consulta)){
        echo "1"; 
        //Header("Location: ../vistas/insertarDato.php?Error=1"); 
    }else{
        $sql = "insert into alumno values ('$codigo', '$dni', '$nombre', '$apellido');";
        
        $resultado = operacion($sql); 

        if ($resultado) {
            //Header("Location: ../vistas/insertarDato.php?Resultado=1"); 
            echo "2"; 
        }else{
            echo "Error al registrar al usuario";             
        }
    }

    

?>