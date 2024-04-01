<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
    protected $fillable = ['name', 'description'];
    // protected $primaryKey = 'id_payment';
    // Define relationships
    public function orders() {
        return $this->hasMany(Order::class, 'payment_id');
    }
    public function paymentDetails() {
        return $this->hasMany(PaymentDetail::class, 'payment_id');
    }
}
