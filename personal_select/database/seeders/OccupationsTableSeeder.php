<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OccupationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $occupations = [
            ['occupation_code' => '1', 'occupation_name' => 'Administración y gerencia', 'description' => 'Conocimiento de principios de negocios y de administración'],
            ['occupation_code' => '2', 'occupation_name' => 'Servicios de oficina y administrativos', 'description' => 'Conocimiento de administración y procedimientos de oficina'],
            ['occupation_code' => '3', 'occupation_name' => 'Economía y contabilidad', 'description' => 'Conocimiento de principios y prácticas de economía'],
            ['occupation_code' => '4', 'occupation_name' => 'Mercadotecnia y ventas', 'description' => 'Conocimiento de principios y métodos para mostrar promover y vender productos o servicios'],
            ['occupation_code' => '5', 'occupation_name' => 'Servicio al cliente', 'description' => 'Conocimiento de principios y procesos para proporcionar al cliente con servicios personales'],
            ['occupation_code' => '6', 'occupation_name' => 'Recursos humanos y de personal', 'description' => 'Conocimiento de principios y procedimientos para buscar seleccionar y capacitar al personal'],
            ['occupation_code' => '7', 'occupation_name' => 'Producción y procesamiento', 'description' => 'Conocimiento de materias primas procesos de producción y otras técnicas para maximizar la producción'],
            ['occupation_code' => '8', 'occupation_name' => 'Producción de alimentos', 'description' => 'Conocimiento de técnicas y de equipo para plantar crecer y cosechar productos alimenticios'],
            ['occupation_code' => '9', 'occupation_name' => 'Computadoras y electrónica', 'description' => 'Conocimiento de tableros de circuito- procesadores- chips- equipo electrónico hardware'],
            ['occupation_code' => '10', 'occupation_name' => 'Ingeniería y tecnología', 'description' => 'Conocimiento sobre la aplicación práctica de ingeniería y tecnología'],
            ['occupation_code' => '11', 'occupation_name' => 'Diseño', 'description' => 'Conocimiento de técnicas de diseño, herramientas y principios'],
            ['occupation_code' => '12', 'occupation_name' => 'Construcción', 'description' => 'Conocimiento conceptual y desarrollo práctico de infraestructura'],
            ['occupation_code' => '13', 'occupation_name' => 'Mecánica', 'description' => 'Conocimiento de máquinas y herramientas'],
            ['occupation_code' => '14', 'occupation_name' => 'Matemáticas', 'description' => 'Conocimiento de aritmética- álgebra- geometría- cálculo y estadística, y sus distintas aplicaciones'],
            ['occupation_code' => '15', 'occupation_name' => 'Física', 'description' => 'Conocimiento y predicción de principios físicos- leyes- sus interrelaciones y aplicaciones'],
            ['occupation_code' => '16', 'occupation_name' => 'Química', 'description' => 'Conocimiento de la composición química-estructura y propiedades de sustancias'],
            ['occupation_code' => '17', 'occupation_name' => 'Biología', 'description' => 'Conocimiento de plantas y organismos animales'],
            ['occupation_code' => '18', 'occupation_name' => 'Psicología', 'description' => 'Conocimiento de la conducta y el comportamiento humano'],
            ['occupation_code' => '19', 'occupation_name' => 'Sociología y antropología', 'description' => 'Conocimiento de la conducta y dinámicas de grupo'],
            ['occupation_code' => '20', 'occupation_name' => 'Geografía y territorio', 'description' => 'Conocimiento de principios y métodos para describir las características de la tierra-del mar y de las masas de aire'],
        ];

        DB::table('occupations')->insert($occupations);
    }
}
