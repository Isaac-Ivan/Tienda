<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuaderno extends Model
{
    use  HasFactory;
    protected $table = 'cuadernos';
    protected $fillable =
    [
        'nombre',
        'marca',
        'precio',
        'stock',
    ];
}
