<?php
namespace Formacom\controllers;

use Formacom\Core\Controller;
use Formacom\Models\Customer;
use Formacom\Models\Address;
use Formacom\Models\Phone;  // Asegúrate de tener el modelo Phone si estás guardando un teléfono.

class CustomerController extends Controller {

    public function index(...$params){
        // Recupera todos los clientes desde la base de datos
        $customers = Customer::all();
        // Pasa los datos a la vista
        $this->view('home', $customers);
    }

    public function show(...$params)  {
        if (isset($params[0])) {
            // Busca al cliente por ID
            $customer = Customer::find($params[0]);
            if ($customer) {
                // Muestra los detalles del cliente
                $this->view('home', $customer);
                exit();
            }
        }

        // Si no se encuentra el cliente, redirige al listado
        $_SESSION['error'] = 'Cliente no encontrado.';
        header("Location: ".base_url()."customer");
        exit();
    }

    public function delete(...$params) {
        if (isset($params[0])) {
            // Busca al cliente por ID
            $customer = Customer::find($params[0]);
    
            if ($customer) {
                // Elimina el cliente
                if ($customer->delete()) {
                    $_SESSION['success'] = 'Cliente eliminado correctamente.';
                } else {
                    $_SESSION['error'] = 'Hubo un problema al eliminar el cliente.';
                }
            } else {
                $_SESSION['error'] = 'Cliente no encontrado.';
            }
        } else {
            $_SESSION['error'] = 'No se ha proporcionado un ID de cliente.';
        }
        
        // Redirige a la lista de clientes
        header("Location: ".base_url()."customer");
        exit();
    }
    
    public function edit(...$params) {
        if (isset($params[0])) {
            // Busca al cliente por ID
            $customer = Customer::find($params[0]);

            if ($customer) {
                // Si el método es POST, significa que estamos editando el cliente
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // Recoge los datos del formulario
                    $name = $_POST['name'];
                    $street = $_POST['street'];
                    $zip_code = $_POST['zip_code'];
                    $city = $_POST['city'];
                    $country = $_POST['country'];

                    // Validación de campos
                    if ($this->validateFields($name, $street, $zip_code, $city, $country)) {
                        // Actualiza los datos del cliente
                        $customer->name = $name;
                        $customer->street = $street;
                        $customer->zip_code = $zip_code;
                        $customer->city = $city;
                        $customer->country = $country;

                        // Guarda los cambios
                        if ($customer->save()) {
                            $_SESSION['success'] = 'Cliente actualizado correctamente.';
                        } else {
                            $_SESSION['error'] = 'Hubo un problema al actualizar el cliente.';
                        }
                    } else {
                        $_SESSION['error'] = 'Todos los campos son obligatorios.';
                    }

                    // Redirige al listado de clientes
                    header("Location: ".base_url()."customer");
                    exit();
                }

                // Si es GET, mostramos el formulario de edición con los datos actuales
                $this->view('edit_customer', $customer);
                exit();
            } else {
                $_SESSION['error'] = 'Cliente no encontrado.';
            }
        } else {
            $_SESSION['error'] = 'No se ha proporcionado un ID de cliente.';
        }

        // Redirige al listado de clientes si no se encuentra el cliente
        header("Location: ".base_url()."customer");
        exit();
    }

    // Función de validación reutilizable
    private function validateFields($name, $street, $zip_code, $city, $country) {
        return !empty($name) && !empty($street) && !empty($zip_code) && !empty($city) && !empty($country);
    }

    // Función para mostrar el formulario de nuevo cliente
    public function new_customer() {
        // Muestra el formulario de registro de un nuevo cliente
        $this->view('new_customer');
    }

    // Función para crear un nuevo cliente en la base de datos
    public function store(...$params)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Obtiene y sanitiza los datos del formulario
            $name     = trim($_POST['name']);
            $street   = trim($_POST['street']);
            $zip_code = trim($_POST['zip_code']);
            $city     = trim($_POST['city']);
            $country  = trim($_POST['country']);
            $number   = trim($_POST['number']);

            // Validación de los campos
            if ($this->validateFields($name, $street, $zip_code, $city, $country)) {
                // Uso de transacción para garantizar la integridad de los datos
                \Illuminate\Database\Capsule\Manager::connection()->transaction(function () use ($name, $street, $zip_code, $city, $country, $number) {
                    // Crea el nuevo cliente
                    $customer = new Customer();
                    $customer->name = $name;
                    $customer->save();

                    // Crea la dirección asociada al cliente
                    $customer->addresses()->create([
                        'street'   => $street,
                        'zip_code' => $zip_code,
                        'city'     => $city,
                        'country'  => $country,
                    ]);

                    // Crea el teléfono asociado al cliente
                    if (!empty($number)) {
                        $customer->phones()->create([
                            'number' => $number,
                        ]);
                    }
                });

                // Redirige a la lista de clientes
                $_SESSION['success'] = 'Cliente creado correctamente.';
                header("Location: " . base_url() . "customer");
                exit();
            } else {
                $_SESSION['error'] = 'Todos los campos son obligatorios.';
            }
        } else {
            // Si la petición no es POST, muestra el formulario de creación
            $this->view('new_customer');
        }
    }
}
