<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'shipping_option',
        'shipping_fee',
        'total_amount',
    ];

    public function orderproducts()
    {
        return $this->hasMany(OrderProduct::class, 'order_id' , 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
