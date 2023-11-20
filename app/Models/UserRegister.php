<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRegister extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'nombre' ,
        'password',
        'rol'
    ];

    protected $table = 'users';
    protected $primaryKey = 'id';
}
