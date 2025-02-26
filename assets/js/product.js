fetch("http://localhost/tiendamvc/api/categories")
    .then(data => data.json())  // Convertir la respuesta en JSON
    .then(datos => {

        datos.forEach(category => {
            let option = document.createElement("option");
            option.value = category.category_id;
            option.textContent = category.name;
            document.getElementById("category").appendChild(option);    
        });
    })
    .catch(error => console.log(error));  // Captura errores y los muestra

    fetch("http://localhost/tiendamvc/api/providers")
    .then(data => data.json())  // Convertir la respuesta en JSON
    .then(datos => {
        // Iterar sobre los datos recibidos (en este caso, los proveedores)
        datos.forEach(provider => {
            // Crear un nuevo elemento option para cada proveedor
            let option = document.createElement("option");
            option.value = provider.provider_id;  // Asignar el ID del proveedor como valor
            option.textContent = provider.name;  // Asignar el nombre del proveedor como texto visible
            // Añadir el nuevo option al select con ID "provider"
            document.getElementById("provider").appendChild(option);    
        });
    })
    .catch(error => console.log(error));  // Captura errores y los muestra

