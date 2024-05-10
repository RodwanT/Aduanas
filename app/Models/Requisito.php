<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
    protected $table = 'requisitos_importacion'; // Nombre de la tabla en la base de datos


    protected $fillable = ['fk_subcategoria','requisitos', 'restricciones', 'normativas', 'procedimiento_importacion'];

    public function subcategoria()
    {
        return $this->belongsTo(Subcategoria::class, 'fk_subcategoria', 'id_subcategoria');
    }
}
