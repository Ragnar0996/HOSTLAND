<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    // protected $guarded = [];
    protected $fillable = [
        'fecha',
        'centro',
        'nombre',
        'curso',
        'edad',
        'email',
        'telefono',
        'etiqueta'
    ];
}
