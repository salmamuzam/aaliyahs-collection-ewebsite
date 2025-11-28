<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'images',
        'description',
        'price',
        'is_popular',
    ];

    //images are stored as JSON in the migration file, therefore it is cast to an array
    protected $casts = [
        'images' => 'array',
    ];

    // Product belongs to a category
    public function category(){
        return $this->belongsTo(Category::class);
    }

    // Product can belong to order items
    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }
}
