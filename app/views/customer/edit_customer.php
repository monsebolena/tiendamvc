<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1 class="my-4">Editar Cliente: <?= htmlspecialchars($data->name) ?></h1>

        <!-- Mensaje de éxito o error -->
        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success">
                <?= $_SESSION['success']; ?>
                <?php unset($_SESSION['success']); ?>
            </div>
        <?php elseif (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger">
                <?= $_SESSION['error']; ?>
                <?php unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <!-- Formulario para editar cliente -->
        <form action="<?= base_url() ?>customer/edit/<?= $data->customer_id ?>" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($data->name) ?>" required>
            </div>

            <div class="mb-3">
                <label for="street" class="form-label">Calle</label>
                <input type="text" class="form-control" id="street" name="street" value="<?= htmlspecialchars($data->addresses[0]->street) ?>" required>
            </div>

            <div class="mb-3">
                <label for="zip_code" class="form-label">Código Postal</label>
                <input type="text" class="form-control" id="zip_code" name="zip_code" value="<?= htmlspecialchars($data->addresses[0]->zip_code) ?>" required>
            </div>

            <div class="mb-3">
                <label for="city" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="city" name="city" value="<?= htmlspecialchars($data->addresses[0]->city) ?>" required>
            </div>

            <div class="mb-3">
                <label for="country" class="form-label">País</label>
                <input type="text" class="form-control" id="country" name="country" value="<?= htmlspecialchars($data->addresses[0]->country) ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Cliente</button>
        </form>

        <a href="<?= base_url() ?>customer" class="btn btn-secondary mt-3">Volver al listado de clientes</a>
    </div>
</body>

</html>
