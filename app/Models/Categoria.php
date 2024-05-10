<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_categoria'; // Nombre de la clave primaria en la tabla

    protected $fillable = ['nombre', 'descripcion'];

    public function subcategorias()
    {
        return $this->hasMany(Subcategoria::class, 'fk_categoria', 'id_categoria');
    }
}
