<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function ShowCategorites()
    {
        $categorias = Categoria::all();
        return view("categorias", compact('categorias'));
    }
    public function ShowCategory($nombre_categoria)
    {
        $categoria = Categoria::where('nombre', $nombre_categoria)->firstOrFail();
        $subcategorias = $categoria->subcategorias;
        return view("subcategorias", compact('categoria', 'subcategorias'));
    }
}
