<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'userName',
        'password',
        'profileImage',
    ];
    use HasFactory , Notifiable;
}
