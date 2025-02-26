<?php
namespace Formacom\controllers;

use Formacom\Core\Controller;
use Formacom\Models\Customer;
use Formacom\Models\Product;
use Formacom\Models\Address;
use Formacom\Models\Phone;  

class ProductController extends Controller {
    public function index(...$params){
        // Recupera todos los clientes desde la base de datos
        $customers = Customer::all();
        // Pasa los datos a la vista
        $this->view('home_product', $customers);
    }
}
