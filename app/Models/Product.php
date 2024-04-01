<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['name', 'description', 'price', 'image', 'material', 'stock', 'code', 'category_id'];
    // protected $primaryKey = 'id_product';
    // Define relationships
    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function orders() {
        return $this->belongsToMany(Order::class, 'order_detail', 'product_id', 'order_id');
    }
    public function colors()
    {
        return $this->belongsToMany(Color::class, 'product_color');
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_size');
    }
}
