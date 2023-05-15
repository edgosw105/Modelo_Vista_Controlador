<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // obtener el archivo cargado
    $pdf = $_FILES['pdf']['tmp_name'];
  
    // mover el archivo a la carpeta uploads en el servidor
    $ruta = '../uploads/' . $_FILES['pdf']['name'];
    move_uploaded_file($pdf, $ruta);
  
    // obtener la ruta completa del archivo en el servidor
    $ruta_completa = realpath($ruta);
    $ruta_completa = addslashes($ruta_completa);
  
    // guardar la ruta del archivo en la base de datos MySQL
    $conexion = mysqli_connect('localhost', 'root', '', 'bdcrud');
    $query = "INSERT INTO archivos (ruta) VALUES ('$ruta_completa')";
    mysqli_query($conexion, $query); 
}

?>