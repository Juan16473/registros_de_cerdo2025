<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run()
    {
        Producto::create([
            'nombre' => 'Concentrado Premium',
            'tipo' => 'Alimento',
            'precio' => 45000,
            'cantidad' => 20,
            'descripcion' => 'Alimento balanceado para cerdos en etapa de engorde.'
        ]);

        Producto::create([
            'nombre' => 'Vacuna Aujeszky',
            'tipo' => 'Medicamento',
            'precio' => 120000,
            'cantidad' => 10,
            'descripcion' => 'Vacuna preventiva para enfermedades virales porcinas.'
        ]);
    }
}


