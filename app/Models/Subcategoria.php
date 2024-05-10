<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    protected $table = 'subcategorias'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_subcategoria';

    protected $fillable = ['nombre', 'descripcion', 'fk_categoria'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'fk_categoria', 'id_categoria');
    }
    public function requisitos()
    {
        return $this->hasMany(Requisito::class, 'fk_subcategoria', 'id_subcategoria');
    }
}
