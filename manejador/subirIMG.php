<?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // obtener la imagen cargada
      $imagen = $_FILES['imagen']['tmp_name'];
    
      // mover la imagen a la carpeta uploads en el servidor
      $ruta = '../uploads/' . $_FILES['imagen']['name'];
      move_uploaded_file($imagen, $ruta);
    
      // obtener la ruta completa de la imagen en el servidor
      $ruta_completa = realpath($ruta);
      $ruta_completa = addslashes($ruta_completa); 

      $ruta = addslashes($ruta); 

      // guardar la ruta de la imagen en la base de datos MySQL
      $conexion = mysqli_connect('localhost', 'root', '', 'bdcrud');
      $query = "INSERT INTO archivos (ruta) VALUES ('$ruta')";
      mysqli_query($conexion, $query);
    }
?>