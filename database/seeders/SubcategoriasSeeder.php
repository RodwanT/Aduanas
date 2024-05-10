<?php

namespace Database\Seeders;

use App\Models\Subcategoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subcategoria::create(['nombre' => 'Alimentos Procesados', 'fk_categoria' => '1', 'icon' => 'fas fa-utensils']);
        Subcategoria::create(['nombre' => 'Bebidas Alcohólicas', 'fk_categoria' => '1', 'icon' => 'fas fa-cocktail']);
        Subcategoria::create(['nombre' => 'Bebidas no Alcohólicas', 'fk_categoria' => '1', 'icon' => 'fas fa-wine-bottle']);
        Subcategoria::create(['nombre' => 'Productos Agrícolas Frescos', 'fk_categoria' => '1', 'icon' => 'fas fa-paintbrush']);

        Subcategoria::create(['nombre' => 'Productos Químicos Industriales', 'fk_categoria' => '2','icon' => 'fas fa-flask']);
        Subcategoria::create(['nombre' => 'Productos Farmacéuticos', 'fk_categoria' => '2', 'icon' => 'fas fa-pills']);
        Subcategoria::create(['nombre' => 'Productos Cosméticos', 'fk_categoria' => '2', 'icon' => 'fa-solid fa-spray-can-sparkles']);
        Subcategoria::create(['nombre' => 'Productos de limpieza', 'fk_categoria' => '2', 'icon' => 'fas fa-soap']);

        Subcategoria::create(['nombre' => 'Ropa', 'fk_categoria' => '3','icon' => 'fas fa-tshirt']);
        Subcategoria::create(['nombre' => 'Calzado', 'fk_categoria' => '3', 'icon' => 'fas fa-shoe-prints']);
        Subcategoria::create(['nombre' => 'Telas', 'fk_categoria' => '3','icon' => 'fas fa-map']);
        Subcategoria::create(['nombre' => 'Accesorios Textiles', 'fk_categoria' => '3','icon' => 'fas fa-map']);

        Subcategoria::create(['nombre' => 'Dispositivos Electrónicos', 'fk_categoria' => '4','icon' => 'fas fa-mobile-alt']);
        Subcategoria::create(['nombre' => 'Equipos de Telecomunicaciones', 'fk_categoria' => '4','icon' => 'fas fa-satellite-dish']);
        Subcategoria::create(['nombre' => 'Computadoras', 'fk_categoria' => '4','icon' => 'fas fa-laptop']);
        Subcategoria::create(['nombre' => 'Partes y Componentes Electrónicos', 'fk_categoria' => '4','icon' => 'fas fa-microchip']);

        Subcategoria::create(['nombre' => 'Automóviles', 'fk_categoria' => '5','icon' => 'fas fa-car']);
        Subcategoria::create(['nombre' => 'Motocicletas', 'fk_categoria' => '5', 'icon' => 'fas fa-motorcycle']);
        Subcategoria::create(['nombre' => 'Piezas de Repuesto', 'fk_categoria' => '5', 'icon' => 'fas fa-wrench']);
        Subcategoria::create(['nombre' => 'Neumáticos', 'fk_categoria' => '5', 'icon' => 'fas fa-car-side']);

        Subcategoria::create(['nombre' => 'Acero', 'fk_categoria' => '6', 'icon' => 'fas fa-tarp']);
        Subcategoria::create(['nombre' => 'Cemento', 'fk_categoria' => '6', 'icon' => 'fas fa-mound']);
        Subcategoria::create(['nombre' => 'Madera', 'fk_categoria' => '6', 'icon' => 'fas fa-tree']);
        Subcategoria::create(['nombre' => 'Vidrio', 'fk_categoria' => '6', 'icon' => 'fas fa-glass-whiskey']);

        Subcategoria::create(['nombre' => 'Productos agrícolas', 'fk_categoria' => '7','icon' => 'fas fa-seedling']);
        Subcategoria::create(['nombre' => 'Maderas', 'fk_categoria' => '7', 'icon' => 'fas fa-tree']);
        Subcategoria::create(['nombre' => 'Minerales', 'fk_categoria' => '7', 'icon' => 'fas fa-gem']);
        Subcategoria::create(['nombre' => 'Piedras preciosas', 'fk_categoria' => '7', 'icon' => 'fas fa-gem']);

        Subcategoria::create(['nombre' => 'Maquinaria industrial', 'fk_categoria' => '8', 'icon' => 'fas fa-industry']);
        Subcategoria::create(['nombre' => 'Equipos pesados', 'fk_categoria' => '8', 'icon' => 'fas fa-snowplow']);
        Subcategoria::create(['nombre' => 'Herramientas', 'fk_categoria' => '8', 'icon' => 'fas fa-tools']);
    }
}
