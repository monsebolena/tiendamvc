<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista - Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <span class="navbar-text">
                    Listado de Clientes
                </span>
            </div>
        </nav>
        
        <!-- Tabla de clientes -->
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha de creación</th>
                    <th scope="col">Operaciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $customer) { ?>
                    <tr>
                        <th scope="row"><?= $customer->customer_id ?></th>
                        <td><?= htmlspecialchars($customer->name) ?></td>
                        <td><?= htmlspecialchars($customer->created_at) ?></td> <!-- Fecha de creación -->
                        <td class="d-flex gap-2"> <!-- Usamos d-flex y gap-2 para los botones en una fila con separación -->
                            <!-- Enlace para editar cliente -->
                            <a href="<?= base_url() ?>customer/edit/<?= $customer->customer_id ?>" class="btn btn-warning btn-sm">
                                <i class="fa-solid fa-user-pen"></i> Editar
                            </a>

                            <!-- Formulario para eliminar cliente -->
                            <form action="<?= base_url() ?>customer/delete/<?= $customer->customer_id ?>" method="POST" style="display:inline;" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este cliente?');">
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa-solid fa-trash"></i> Eliminar
                                </button>
                            </form>

                            <!-- Enlace para ver detalles del cliente -->
                            <a href="<?= base_url() ?>customer/show/<?= $customer->customer_id ?>" class="btn btn-info btn-sm">
                                <i class="fa-solid fa-eye"></i> Ver
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>
