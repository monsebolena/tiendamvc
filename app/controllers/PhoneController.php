<?php
namespace Formacom\controllers;

use Formacom\Core\Controller;
use Formacom\Models\Phone;

class PhoneController extends Controller {

    public function index(...$params) {
        // Crear una nueva instancia de Phone
        $phone = new Phone();
        $phone->number = "123456789";  // El número de teléfono
        $phone->save();  // Usamos save() para un nuevo registro
        
    }
}
?>
