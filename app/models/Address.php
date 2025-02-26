<?php
namespace Formacom\Models;
use Illuminate\Database\Eloquent\Model;
class Address extends Model{
    protected $table="address";
    protected $primaryKey = 'address_id';
    protected $fillable = ['street', 'zip_code', 'city', 'country'];

    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

}

?>