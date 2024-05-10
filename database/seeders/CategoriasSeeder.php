<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create(['nombre'=>'Productos Alimenticios y Bebidas', 'icon' => 'fas fa-utensils']);
        Categoria::create(['nombre'=>'Productos Quimicos y Farmaceuticos', 'icon' => 'fa-solid fa-capsules']);
        Categoria::create(['nombre'=>'Productos Textiles y Prendas de Vestir', 'icon' => 'fa fa-shirt']);
        Categoria::create(['nombre'=>'Electrónicos y Tecnologia', 'icon' => 'fa fa-laptop']);
        Categoria::create(['nombre'=>'Vehiculos y Partes de Automoviles', 'icon' => 'fa fa-car']);
        Categoria::create(['nombre'=>'Materiales de Construccion', 'icon' => 'fa fa-trowel-bricks']);
        Categoria::create(['nombre'=>'Productos Naturales', 'icon' => 'fa fa-gem']);
        Categoria::create(['nombre'=>'Productos Industriales y Maquinaria', 'icon' => 'fa fa-helmet-safety']);
    }
}
