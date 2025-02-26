// Solicitud para obtener categorías
fetch("http://localhost/tiendamvc/api/categories")
    .then(response => response.json())  // Convertir la respuesta en JSON
    .then(categories => {
        // Iterar sobre las categorías recibidas
        categories.forEach(category => {
            // Crear un nuevo elemento option para cada categoría
            let option = document.createElement("option");
            option.value = category.category_id;  // Asignar el ID de la categoría como valor
            option.textContent = category.name;   // Asignar el nombre de la categoría como texto visible
            // Añadir el nuevo option al select con ID "category"
            document.getElementById("category").appendChild(option);    
        });
    })
    .catch(error => console.log('Error al cargar categorías:', error));  // Captura errores y los muestra

// Solicitud para obtener proveedores
fetch("http://localhost/tiendamvc/api/providers")
    .then(response => response.json())  // Convertir la respuesta en JSON
    .then(providers => {
        // Iterar sobre los proveedores recibidos
        providers.forEach(provider => {
            // Crear un nuevo elemento option para cada proveedor
            let option = document.createElement("option");
            option.value = provider.provider_id;  // Asignar el ID del proveedor como valor
            option.textContent = provider.name;   // Asignar el nombre del proveedor como texto visible
            // Añadir el nuevo option al select con ID "provider"
            document.getElementById("provider").appendChild(option);    
        });
    })
    .catch(error => console.log('Error al cargar proveedores:', error));  // Captura errores y los muestra

// Enviar el formulario
document.getElementById("form").onsubmit = function(e) {
    e.preventDefault(); // Evitar que el formulario se envíe de manera tradicional
    
    // Crear un objeto con los datos del formulario
    let product = {
        "name": document.getElementById("name").value,
        "price": document.getElementById("price").value,
        "stock": document.getElementById("stock").value,
        "category_id": document.getElementById("category").value,
        "provider_id": document.getElementById("provider").value,
        "description": document.getElementById("description").value
        
    };
    
    // Enviar los datos al servidor mediante una solicitud POST
    fetch("http://localhost/tiendamvc/api/products", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(product)
    })
    .then(response => response.json())  // Convertir la respuesta en JSON
    .then(data => {
        console.log("Producto registrado exitosamente:", data); // Respuesta del servidor
    })
    .catch(error => console.log('Error al registrar producto:', error));  // Captura errores y los muestra
};
