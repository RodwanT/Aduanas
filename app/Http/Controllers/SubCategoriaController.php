<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Subcategoria;
use Illuminate\Http\Request;

class SubCategoriaController extends Controller
{
    public function ShowRequeriments($categoriaNombre, $subcategoriaNombre)
    {
        $categoria = Categoria::where('nombre', $categoriaNombre)->firstOrFail();
        $subcategoria = Subcategoria::where('nombre', $subcategoriaNombre)->firstOrFail();
        $requisitos = $subcategoria->requisitos;
        return view("requisitos", compact('subcategoria', 'requisitos', 'categoria'));
    }
}
