<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'first_name',
        'last_name',
        'phone_number',
        'street_address',
        'city',
        'province',
        'postal_code',
        'country',
    ];

    // Every has only one address

    public function order(){
        return $this->belongsTo(Order::class);
    }

    // Combine first name and last name to create full name
    public function getFullNameAttribute(){
        return "{$this->first_name} {$this->last_name}";
    }
}
