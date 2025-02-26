<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle - Clientes</title>
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
                    Reguistro nuevo cliente
                </span>
            </div>
        </nav>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Nuevo - Clientes</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
                crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        </head>

        <body>
            <div class="container">
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <span class="navbar-text">
                            Nuevo Cliente
                        </span>
                    </div>
                </nav>

                <!-- Formulario de nuevo cliente -->
                <form class="row g-3 needs-validation" method="POST" action="store" novalidate>
                    <!-- Campo Nombre -->
                    <div class="col-md-6">
                        <label for="validationCustomName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="validationCustomName"
                            placeholder="Ingrese su nombre" name="name"
                            value="<?= isset($customer->name) ? $customer->name : ''; ?>" required>
                        <div class="invalid-feedback">
                            Por favor ingrese un nombre.
                        </div>
                    </div>

                    <!-- Campo Dirección (Calle) -->
                    <div class="col-md-6">
                        <label for="validationCustomStreet" class="form-label">Calle</label>
                        <input type="text" class="form-control" id="validationCustomStreet"
                            placeholder="Ingrese su calle" name="street"
                            value="<?= isset($address->street) ? $address->street : ''; ?>" required>
                        <div class="invalid-feedback">
                            Por favor ingrese una calle válida.
                        </div>
                    </div>

                    <!-- Campo Ciudad -->
                    <div class="col-md-6">
                        <label for="validationCustomCity" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" id="validationCustomCity"
                            placeholder="Ingrese su ciudad" name="city"
                            value="<?= isset($address->city) ? $address->city : ''; ?>" required>
                        <div class="invalid-feedback">
                            Por favor ingrese una ciudad válida.
                        </div>
                    </div>

                    <!-- Campo Código Postal -->
                    <div class="col-md-6">
                        <label for="validationCustomZipCode" class="form-label">Código Postal</label>
                        <input type="text" class="form-control" id="validationCustomZipCode"
                            placeholder="Ingrese su código postal" name="zip_code"
                            value="<?= isset($address->zip_code) ? $address->zip_code : ''; ?>" required>
                        <div class="invalid-feedback">
                            Por favor ingrese un código postal válido.
                        </div>
                    </div>

                    <!-- Campo País -->
                    <div class="col-md-6">
                        <label for="validationCustomCountry" class="form-label">País</label>
                        <input type="text" class="form-control" id="validationCustomCountry"
                            placeholder="Ingrese su país" name="country"
                            value="<?= isset($address->country) ? $address->country : ''; ?>" required>
                        <div class="invalid-feedback">
                            Por favor ingrese un país válido.
                        </div>
                    </div>

                    <!-- Campo Teléfono -->
                    <div class="col-md-6">
                        <label for="validationCustomPhone" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="validationCustomPhone"
                            placeholder="Ingrese su teléfono" name="number"
                            value="<?= isset($phone->number) ? $phone->number : ''; ?>" required>
                        <div class="invalid-feedback">
                            Por favor ingrese un número de teléfono válido.
                        </div>
                    </div>

                    <!-- Botón de Enviar -->
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Registrar Cliente</button>
                    </div>
                </form>
            </div>
        </body>

        </html>

    </div>
</body>

</html>