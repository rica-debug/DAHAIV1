<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Eliminar productos existentes para evitar duplicados
        Product::truncate();

        $products = [
            [
                'name' => 'Módulos fotovoltaicos',
                'slug' => 'modulos-fotovoltaicos',
                'description' => 'Módulos solares de alta eficiencia',
                'price' => 299.99,
                'category' => 'SolarModules',
                'main_image' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Inversor',
                'slug' => 'inversor',
                'description' => 'Inversor de corriente para sistemas solares',
                'price' => 499.99,
                'category' => 'Inverters',
                'main_image' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Batería',
                'slug' => 'bateria',
                'description' => 'Batería de almacenamiento solar',
                'price' => 399.99,
                'category' => 'StorageSolutions',
                'main_image' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pila de carga',
                'slug' => 'pila-de-carga',
                'description' => 'Sistema de carga para vehículos eléctricos',
                'price' => 599.99,
                'category' => 'EVCharger',
                'main_image' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Product::insert($products);
    }
}
