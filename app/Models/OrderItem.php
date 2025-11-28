<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'unit_price',
        'total_price',
    ];

    // Every order item belongs to one order
    public function order(){
        return $this->belongsTo(Order::class);
    }

    // Every order item belongs to one product
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
