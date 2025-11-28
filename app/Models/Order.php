<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'grand_total',
        'payment_method',
        'payment_status',
        'status',
        'currency',
        'shipping_cost',
        'shipping_method',
        'notes',
    ];

    // One order belongs to a specific user

    public function user(){
        return $this->belongsTo(User::class);
    }

    // An order contains many items

    public function items(){
        return $this->hasMany(OrderItem::class);
    }

    // An order has one address

    public function address(){
        return $this->hasOne(Address::class);
    }
}
