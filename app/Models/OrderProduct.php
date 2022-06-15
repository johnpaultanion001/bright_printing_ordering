<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'size_id',
        'order_id',
        'qty',
        'price',
        'amount',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function size()
    {
        return $this->belongsTo(Size::class, 'size_id');
    }
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
