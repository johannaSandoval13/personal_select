<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['city_name' => 'Bogotá', 'departament_id' => 1],
            ['city_name' => 'Cali', 'departament_id' => 3],
            ['city_name' => 'Barranquilla', 'departament_id' => 4],
            ['city_name' => 'Cartagena', 'departament_id' => 5],
            ['city_name' => 'Santa Marta', 'departament_id' => 6],
            ['city_name' => 'Manizales', 'departament_id' => 7],
            ['city_name' => 'Pereira', 'departament_id' => 8],
            ['city_name' => 'Armenia', 'departament_id' => 9],
            ['city_name' => 'Pasto', 'departament_id' => 10],
            ['city_name' => 'Cúcuta', 'departament_id' => 11],
            ['city_name' => 'Bucaramanga', 'departament_id' => 12],
            ['city_name' => 'Ibagué', 'departament_id' => 13],
            ['city_name' => 'Villavicencio', 'departament_id' => 14],
            ['city_name' => 'Neiva', 'departament_id' => 15],
            ['city_name' => 'Popayán', 'departament_id' => 16],
            ['city_name' => 'Valledupar', 'departament_id' => 17],
            ['city_name' => 'Montería', 'departament_id' => 18],
            ['city_name' => 'Tunja', 'departament_id' => 19],
            ['city_name' => 'Riohacha', 'departament_id' => 20],
            ['city_name' => 'Quibdó', 'departament_id' => 21],
        ];
    
        DB::table('cities')->insert($cities);
    }
    }

