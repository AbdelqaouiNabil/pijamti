<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'nom',
        'email',
        'tel' ,
        'adress',
        'city',
    ];
    protected function OrderItems()
    {
        return $this->hasMany(App\Models\OrderItem::class);
    }
   
}
