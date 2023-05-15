function ingresarDatos(){
    const datos = new FormData();
    datos.append("codigo", document.getElementById('txtCodigo').value);
    datos.append("dni", document.getElementById('txtDNI').value);
    datos.append("nombre", document.getElementById('txtNombre').value);
    datos.append("apellido", document.getElementById('txtApellido').value);

    

    fetch('../manejador/insertarEstudiante.php', {
        method: "POST",
        body: datos
    })
  .then(response => response.text())
  .then(data => {
    switch (data) {
        case "1":
            //YA EXISTE
            alert('El usuario ya existe'); 
            break;
        case "2":
            alert("Usuario registrado con exito"); 
            fetch("../manejador/consultarEstudiantes.php", {
                method: "POST",
                body: datos
              })
              .then(response => response.text())
              .then(data => {
                let bodyTable = document.getElementById('bodyTable'); 
                bodyTable.innerHTML = "" ; 
                bodyTable.innerHTML = data; 
              })
              .catch(error => {
                console.error(error); // Imprimir cualquier error en la consola
              });
            break;
        default:
            console.log(data);
            break;
    }
  })
  .catch(error => {
    console.error(error);
  });
} 