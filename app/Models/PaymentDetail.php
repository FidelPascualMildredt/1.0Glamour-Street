<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentDetail extends Model
{
    use HasFactory;
    protected $table = 'payment_details';
    protected $fillable = ['user_id', 'payment_id', 'details'];
    // protected $primaryKey = 'id_payment_detail';
    // Define relationships
    public function payment() {
        return $this->belongsTo(Payment::class, 'payment_id');
    }
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
