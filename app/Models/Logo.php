<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;
    protected $table = 'logos';
    protected $fillable = ['product_id', 'user_id', 'image', 'details'];
    // protected $primaryKey = 'id_logo';
    // Define relationships
    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
