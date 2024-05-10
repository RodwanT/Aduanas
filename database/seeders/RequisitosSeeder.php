<?php

namespace Database\Seeders;

use App\Models\Requisito;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RequisitosSeeder extends Seeder
{


    public function run(): void
    {
        Requisito::create([
        'fk_subcategoria'=>1,
        'requisitos' => 'Certificado de origen',
        'restricciones' => '<lu><b><li>Prohibiciones de Importación:</li></b> Algunos países pueden prohibir la importación de ciertos productos por razones de seguridad, salud pública, protección del medio ambiente o políticas comerciales. <br><b><li>Cuotas de Importación:</b></li> Se establecen límites en la cantidad de ciertos productos que pueden importarse durante un período de tiempo determinado. <br><b><li>Requisitos de Licencias:</li></b> Algunos productos pueden requerir licencias especiales para su importación, que pueden estar sujetas a aprobación por parte de las autoridades competentes.</lu>',
        'normativas' => '<lu><b><li>Normativas de Seguridad:</li></b>Requisitos de seguridad para los productos importados, incluyendo estándares de calidad y pruebas de conformidad. <br><b><li>Normativas Sanitarias y Fitosanitarias:</li></b> Regulaciones relacionadas con la seguridad alimentaria, la salud animal y vegetal, y la protección contra enfermedades. <br><b><li>Normativas de Etiquetado:</li></b> Requisitos de etiquetado y marcado de productos, incluyendo información obligatoria sobre ingredientes, instrucciones de uso y advertencias.</lu>',
        'procedimientos_importacion' => '<ul><b><li>Presentación de Documentación:</li></b> Documentos necesarios para la importación, como facturas comerciales, lista de empaque, certificados de calidad y certificados de origen. <br><b><li>Despacho Aduanero:</li></b> Trámites aduaneros para la entrada de los productos al país importador, que pueden incluir la presentación de declaraciones aduaneras, pago de aranceles e impuestos, y cumplimiento de regulaciones aduaneras. <br><b><li>Inspección de Mercancías:</li></b> Verificación de la conformidad de los productos importados con las normativas y estándares aplicables, que puede incluir inspecciones físicas y documentales. <br><b><li>Obtención de Autorizaciones:</li></b> Obtención de autorizaciones o permisos especiales requeridos para la importación de ciertos productos, como productos controlados, productos químicos o productos de alta tecnología.<ul>'
    ]);
        Requisito::create([
        'fk_subcategoria' => 1,
        'requisitos' => 'Factura comercial',
        'restricciones' => 'Prohibido importar productos falsificados',
        'normativas' => 'Cumplir con normas de etiquetado',
        'procedimientos_importacion' => 'Pagar impuestos de importación',]);

        Requisito::create([
            'fk_subcategoria' => 2,
            'requisitos' => 'Certificado fitosanitario',
            'restricciones' => 'Prohibido importar productos dañados',
            'normativas' => 'Cumplir con regulaciones de pesticidas',
            'procedimientos_importacion' => 'Inspección en el puerto de entrada',
        ]);

        Requisito::create([
            'fk_subcategoria' => 2,
                'requisitos' => 'Declaración de importación',
                'restricciones' => 'Prohibido importar productos no autorizados',
                'normativas' => 'Cumplir con regulaciones de importación',
                'procedimientos_importacion' => 'Registrar la importación en aduana',
        ]);

        $faker = Faker::create();

        for ($i = 3; $i < 32; $i++){
            for ($j = 0; $j < 3; $j++) {
                Requisito::create([
                    'fk_subcategoria' => $i,
                    'requisitos' => $faker->sentence(),
                    'restricciones' => $faker->sentence(),
                    'normativas' => $faker->sentence(),
                    'procedimientos_importacion' => $faker->sentence(),
                ]);
            }
        }
    }
}
