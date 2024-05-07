<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'prioridad',
        'activo',
    ];

    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
    }

}
