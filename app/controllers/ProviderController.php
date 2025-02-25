<?php
namespace Formacom\controllers;

use Formacom\Core\Controller;
use Formacom\Models\Provider;  // Importar el modelo Provider

class ProviderController extends Controller {
    public function index(...$params) {
        // Crear una nueva instancia de Provider
        $provider = new Provider();  // Creamos un objeto de tipo Provider

        // Asignar algunos valores de ejemplo
        $provider->name = "Empresa de ayuda a domicilio";  // Nombre del proveedor de ejemplo
        $provider->web= "ayuda@ejemplo.com";  // Información de contacto del proveedor de ejemplo
        $provider->save();  // Guardar los datos del proveedor en la base de datos

        // Datos para pasar a la vista
        $data = ['mensaje' => '¡Bienvenido a la página de proveedores!'];

        // Renderizar la vista 'provider' y pasar los datos
        //$this->view('provider', $data);
    }

    public function new() {
        // Este método puede mostrar un mensaje o cargar un formulario para ingresar un nuevo proveedor
        echo "Hola desde New de ProviderController";
    }
}
?>
