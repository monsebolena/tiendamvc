<?php
namespace Formacom\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {
    // Definir la tabla que corresponde a este modelo
    protected $table = "address";  // Nombre de la tabla en la base de datos

    // Definir la clave primaria si no es la id por defecto
    protected $primaryKey = 'address_id';  // Asegúrate de que esta columna exista en tu tabla

    // Definir los campos que se pueden asignar de manera masiva
    protected $fillable = ['street', 'city', 'zip_code', 'customer_id'];  // Aquí puedes agregar más campos

    // Definir la relación inversa con el modelo Customer (uno a muchos)
    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
?>
