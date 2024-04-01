<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = ['client_id', 'user_id', 'status', 'date', 'subtotal', 'tax', 'total', 'payment_id'];
    // protected $primaryKey = 'id_order';
    // Define relationships
    public function customer() {
        return $this->belongsTo(User::class, 'customer_id');
    }
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function products() {
        return $this->belongsToMany(Product::class, 'order_detail', 'order_id', 'product_id')->withPivot('quantity', 'price', 'discount');
    }
    public function payment() {
        return $this->belongsTo(Payment::class, 'payment_id');
    }
}
