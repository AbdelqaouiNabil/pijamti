<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
   
    protected $fillable = [
        'name',
    ];
    protected function products()
    {
        return $this->hasMany(App\Models\Product::class);
    }
}

