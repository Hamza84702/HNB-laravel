<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'total_amount', 
        'user_id', 
        'full_name', 
        'email', 
        'phone', 
        'billing_address', 
        'shipping_address', 
        'order_number', 
        'delivery_at', 
        'payment_status', 
        'payment_method'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
