<?php

    /* if (isset($_GET["Error"])) {
        if ($_GET["Error"] == 1) {
            echo '<script type="text/javascript">
            window.onload = function () { 
                alert("El usuario ya existe"); 
            } 
        </script>';
        }
    }

    if (isset($_GET["Resultado"])) {
        if ($_GET["Resultado"] == 1) {
            echo '<script type="text/javascript">
            window.onload = function () { 
                alert("El usuario se ha ingresado correctamente!"); 
            } 
        </script>';
        }
    } */
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
        crossorigin="anonymous"></script>

    <script src="../js/funciones.js"></script>
</head>
<body>

<div class="form-group">
    <label for="txtCodigo">Código</label>
    <input type="text" class="form-control" id="txtCodigo" name="txtCodigo" placeholder="Ingrese el código">
  </div>
  <div class="form-group">
    <label for="txtDNI">DNI</label>
    <input type="text" class="form-control" id="txtDNI" name="txtDNI" placeholder="Ingrese el DNI">
  </div>
  <div class="form-group">
    <label for="txtNombre">Nombres</label>
    <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Ingrese los nombres">
  </div>
  <div class="form-group">
    <label for="txtApellido">Apellidos</label>
    <input type="text" class="form-control" id="txtApellido" name="txtApellido" placeholder="Ingrese los apellidos">
  </div>
  <button onclick="ingresarDatos()" class="btn btn-primary">Enviar</button>
    
        <div>
        <table class="table">
            <thead>
                <tr>
                <th>Código</th>
                <th>DNI</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                </tr>
            </thead>
            <tbody id="bodyTable">
                
            </tbody>
        </table>

        </div>
</body>
</html>