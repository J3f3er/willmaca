<?php

namespace Database\Seeders;

use App\Models\Producto\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            "nombre" => "botas",
            "precio" => "12.00$",
            "categoria" => "Botas",
            "ruta" => "public/img/botas",
            "imagen" => "storage/img/botas/botas.jpg",
            "descripcion" => "Botas",
        ]);

        Producto::create([
            "nombre" => "guantes",
            "precio" => "12.00$",
            "categoria" => "Guantes",
            "ruta" => "public/img/guantes",
            "imagen" => "storage/img/guantes/guantes.jpg",
            "descripcion" => "Guantes",
        ]);

        Producto::create([
            "nombre" => "lentes",
            "precio" => "12.00$",
            "categoria" => "Lentes",
            "ruta" => "public/img/lentes",
            "imagen" => "storage/img/lentes/lentes.jpg",
            "descripcion" => "Lentes",
        ]);

        Producto::create([
            "nombre" => "Tapa Bocas",
            "precio" => "12.00$",
            "categoria" => "Tapa Bocas",
            "ruta" => "public/img/tapa_bocas",
            "imagen" => "storage/img/tapa_bocas/tapa_bocas.jpg",
            "descripcion" => "Tapa Bocas",
        ]);

        Producto::create([
            "nombre" => "Trajes",
            "precio" => "12.00$",
            "categoria" => "Trajes",
            "ruta" => "public/img/trajes",
            "imagen" => "storage/img/trajes/trajes.jpg",
            "descripcion" => "Trajes de Bio Seguridad",
        ]);

    }
}
