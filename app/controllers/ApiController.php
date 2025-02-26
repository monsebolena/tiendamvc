<?php
namespace Formacom\controllers;

use Formacom\Core\Controller;
use Formacom\Models\Customer;
use Formacom\Models\Address;
use Formacom\Models\Category;
use Formacom\Models\Provider;

class ApiController extends Controller {
    public function index(...$params) {
        // Método 'index' vacío (si necesitas algo aquí, añádelo más tarde)
    }

    public function categories(...$params) {
        // Obtener todas las categorías desde la base de datos
        $categories = Category::all();
        
        // Convertir las categorías a formato JSON
        $json = json_encode($categories);
        
        // Establecer el encabezado de la respuesta como JSON
        header('Content-Type: application/json');
        
        // Enviar el JSON como respuesta
        echo $json;
        
        // Finalizar la ejecución del script
        exit(); 
    }

    public function providers(...$params) {
        // Obtener todas las categorías desde la base de datos
        $providers = Provider::all();
        
        // Convertir las categorías a formato JSON
        $json = json_encode($providers);
        
        // Establecer el encabezado de la respuesta como JSON
        header('Content-Type: application/json');
        
        // Enviar el JSON como respuesta
        echo $json;
        
        // Finalizar la ejecución del script
        exit(); 
    }
}
?>

