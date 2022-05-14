<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use \Conner\Tagging\Taggable;

    protected $fillable = ['name','color','description','size','image','imageHover','price','BarredPrice','categorie_id','special'];

    protected $casts = [
        'color' => 'array',
        'size' => 'array'
    ];
    protected function categories()
    {
        return $this->belongsTo(Categorie::class);
    }
}
