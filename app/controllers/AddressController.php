<?php
namespace Formacom\controllers;

use Formacom\Core\Controller;
use Formacom\Models\Address;

class AddressController extends Controller {
    public function index(...$params) {
        // Crear una nueva instancia de Address
        $address = new Address();
        $address->street = "Calle Marín";
        $address->zip_code = "36201";
        $address->city = "Vigo";
        $address->country = "Spein";
        $address->update();  // Aquí puedes actualizar o guardar la dirección en la base de datos
        
        // Datos para enviar a la vista
        $data = ['mensaje' => '¡Bienvenido a la página de direcciones!'];
        
        // Renderizar la vista 'address' y pasar los datos
        $this->view('address', $data);
    }

    public function new() {
        // Este método puede mostrar un mensaje o cargar un formulario para ingresar nueva dirección
        echo "Hola desde New de AddressController";
    }
}
?>
