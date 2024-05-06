<?php

namespace Database\Seeders;

use App\Models\Miembro;
use Illuminate\Database\Seeder;

class MiembroSeeder extends Seeder
{
    /**
     * TODO: Para crear un seeder se utiliza el comando: php artisan make:seeder MiembroSeeder
     * TODO: Para mandar a llamar al seeder se lo hace en el archivo DatabaseSeeder.php
     * TODO: Para ejecutar el contenido del seeder se utiliza el comando:  php artisan db:seed
     * TODO: Seeder: sirven para sembrar datos
     */
    public function run(): void
    {
        /*Miembro::create([
            'nombre_apellido'=>'KR',
            'direccion'=>'UI',
            'telefono'=>'0985749687',
            'fecha_nacimiento'=>'1994-06-25',
            'genero'=>'masculino',
            'email'=>'kr@outlook.com',
            'estado'=>'1',
            'curso'=>'Inteligencia Artificial',
            'fotografia'=>'kr.jpg',
            'fecha_ingreso'=>'2024-05-02'
        ]);

        Miembro::create([
            'nombre_apellido'=>'ML',
            'direccion'=>'OI',
            'telefono'=>'0952145639',
            'fecha_nacimiento'=>'1994-02-18',
            'genero'=>'femenino',
            'email'=>'ml8@gmail.com',
            'estado'=>'1',
            'curso'=>'Inglés',
            'fotografia'=>'ml.jpg',
            'fecha_ingreso'=>'2024-05-02'
        ]);

        Miembro::create([
            'nombre_apellido'=>'CT',
            'direccion'=>'MO',
            'telefono'=>'0984756398',
            'fecha_nacimiento'=>'1995-12-06',
            'genero'=>'masculino',
            'email'=>'ct07@yahoo.es',
            'estado'=>'1',
            'curso'=>'Geolocalización',
            'fotografia'=>'ct.jpg',
            'fecha_ingreso'=>'2024-05-02'
        ]);*/

        /*TODO: Invocando a la clase que contiene MiembroFactory para crear un sin número de siembra 
        de datos(en este caso en el contador solo se a puesto que se ingresen solo 20 registros) */
        Miembro::factory()->count(20)->create();
    }
}
