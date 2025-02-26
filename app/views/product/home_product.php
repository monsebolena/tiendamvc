<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <span class="navbar-text">
                    Productos
                </span>
            </div>
        </nav>
                
        <!-- Formulario para crear o registrar un producto -->
        <h2 class="mt-4">Registrar Producto</h2>
        <form action="/ruta-a-tu-controlador" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="img" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="img" name="img" accept="image/*" required>
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Categoría</label>
                <select class="form-select" id="category" name="category" required>
                    <option value="">Selecciona una categoría</option>
                    <!-- Aquí puedes agregar las categorías disponibles -->
                    <option value="electronic">Electrónica</option>
                    <option value="clothing">Ropa</option>
                    <option value="home">Hogar</option>
                    <option value="books">Libros</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="provider" class="form-label">Proveedor</label>
                <input type="text" class="form-control" id="provider" name="provider" required>
            </div>

            <button type="submit" class="btn btn-primary">Registrar Producto</button>
        </form>
    </div>
</body>

</html>
