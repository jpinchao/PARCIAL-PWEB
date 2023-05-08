<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sale;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sale::create([
            'nombre_vendedor' => 'Juan',
            'nombre_cliente' => 'Pedro',
            'nombre_producto' => 'Coca Cola',
            'precio' => '10',
            'fecha_compra' => '2021-05-07',
        ]);
        Sale::create([
            'nombre_vendedor' => 'Pedro',
            'nombre_cliente' => 'Juan',
            'nombre_producto' => 'Pepsi',
            'precio' => '15',
            'fecha_compra' => '2021-05-07',
        ]);
        Sale::create([
            'nombre_vendedor' => 'Juan',
            'nombre_cliente' => 'Pedro',
            'nombre_producto' => 'Coca Cola',
            'precio' => '10',
            'fecha_compra' => '2021-05-07',
        ]);
        Sale::create([
            'nombre_vendedor' => 'Pedro',
            'nombre_cliente' => 'Juan',
            'nombre_producto' => 'Pepsi',
            'precio' => '15',
            'fecha_compra' => '2021-05-07',
        ]);
        Sale::create([
            'nombre_vendedor' => 'Juan',
            'nombre_cliente' => 'Pedro',
            'nombre_producto' => 'Coca Cola',
            'precio' => '10',
            'fecha_compra' => '2021-05-07',
        ]);
    }
}
