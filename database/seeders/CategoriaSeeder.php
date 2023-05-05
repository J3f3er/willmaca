<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria\Categoria;


class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            "nombre" => "Botas",
            "descripcion" => "calzado que protege el pie, el tobillo y un sector de la pierna.",
        ]);

        Categoria::create([
            "nombre" => "Tapa Bocas",
            "descripcion" => "Esta mascarilla se usa cuando lo que se requiere es proteger al personal de salud de la inhalación de contaminantes ambientales, como pueden ser riesgos biológicos, fármacos, citostáticos, entre otros.",
        ]);

        Categoria::create([
            "nombre" => "Lentes",
            "descripcion" => "Las gafas de protección, también conocidas como goggles o lentes de seguridad, son un tipo especial de anteojos que se utilizan para proteger párpados y ojos de la acción corrosiva de algunas sustancias o de la entrada en estos de alguna viruta procedente de algún trabajo de maquinado o similar.",
        ]);

        Categoria::create([
            "nombre" => "Trajes de Bio Seguridad",
            "descripcion" => "Estos trajes de bioseguridad cuenta con una tela con tratamiento antifluido y se recomienda para una interacción intermedia con otras personas, o para cuando no es posible mantener un distanciamiento social apropiado (contacto menor a 2 metros).",
        ]);

        Categoria::create([
            "nombre" => "Guantes",
            "descripcion" => "Prenda que cubre y protege la mano y que, según su empleo, tiene unas características distintas pudiendo tener una funda para cada uno de los dedos, cubrir parte del brazo y variar el tipo de material en que está confeccionada.",
        ]);

    }
}
