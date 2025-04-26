<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartmentsAndCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            'Antioquia' => ['Medellín', 'Envigado', 'Bello'],
            'Bogotá' => ['Bogotá'],
        ];
 
        foreach ($departments as $department => $cities) {
            foreach ($cities as $city) {
                // Guardar en la base de datos (puedes usar una tabla adicional si es necesario)
            }
        }
    }
 
}
