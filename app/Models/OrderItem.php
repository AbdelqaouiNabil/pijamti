<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $table = 'order_items';
    protected $fillable = [
        'orderId',
        'proId',
        'productName' ,
        'qty',
        'size',
        'color',
        'price',
        'subtotal',
        'codepromo',
        'livraison',
        'total',
    ];
    protected function Order()
    {
        return $this->belongsTo(Order::class,);
    }
}
