<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
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
                    Listado clientes
                </span>
            </div>
        </nav>
        <table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Cliente</th>
            <th scope="col">Dirección</th>
            <th scope="col">Teléfono</th> 
            <th scope="col">Operaciones</th> <!-- Columna de operaciones -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $key => $customer) { ?>
            <tr>
                <th scope="row"><?= $customer->customer_id ?></th>
                <td><?= $customer->name ?></td>
                <td><?= $customer->address ?></td>
                <td><?= $customer->phone ?></td>
            
                <td>
                    <!-- Contenedor para los íconos de operaciones -->
                    <div class="operations-icons">
                        <a href="<?= base_url() ?>customer/view/<?= $customer->customer_id ?>"><i class="fa-solid fa-eye"></i></a>
                        <a href="<?= base_url() ?>customer/edit/<?= $customer->customer_id ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="<?= base_url() ?>customer/delete/<?= $customer->customer_id ?>"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </td>
            </tr>
        <?php } ?>            
    </tbody>
</table>

    </div>
</body>         
</html>
