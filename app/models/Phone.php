<?php
namespace Formacom\Models;
use Illuminate\Database\Eloquent\Model;
class Phone extends Model{
    protected $table="phone";
    protected $primaryKey = 'phone_id';
    protected $fillable = ['number'];

    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

}

?>