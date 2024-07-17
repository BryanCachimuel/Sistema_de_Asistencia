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
        Miembro::create([
            'nombre_apellido'=>'Kevin López',
            'direccion'=>'Santo Domingo',
            'telefono'=>'0985749687',
            'fecha_nacimiento'=>'1995-01-12',
            'genero'=>'masculino',
            'email'=>'kevinlopez@outlook.com',
            'estado'=>'1',
            'curso'=>'Desarrollo de Software',
            'fotografia'=>'kl.jpg',
            'fecha_ingreso'=>'2024-07-16'
        ]);

        Miembro::create([
            'nombre_apellido'=>'Marlene Arrayan',
            'direccion'=>'Quito',
            'telefono'=>'0987456934',
            'fecha_nacimiento'=>'1995-04-25',
            'genero'=>'femenino',
            'email'=>'marlenearrayan@gmail.com',
            'estado'=>'1',
            'curso'=>'Programación',
            'fotografia'=>'ma.jpg',
            'fecha_ingreso'=>'2024-05-02'
        ]);

        /*TODO: Invocando a la clase que contiene MiembroFactory para crear un sin número de siembra 
        de datos(en este caso en el contador solo se a puesto que se ingresen solo 20 registros) */
        Miembro::factory()->count(20)->create();
    }
}
