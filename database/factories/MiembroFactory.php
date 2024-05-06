<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Miembro>
 */
class MiembroFactory extends Factory
{
    /**
     * TODO: Se lo crea mediante el comando: php artisan make:factory MiembroFactory
     * TODO: Todos los Str ingresan datos randon
     * TODO: Es un sembrador de datos pero en grandes cantidades
     * TODO: Este factory se lo invoca en el archivo MiembroSeeder 
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_apellido'=> Str::random(10),
            'direccion'=> Str::random(50),
            'telefono'=> random_int(7000000,7999999),
            'fecha_nacimiento'=> Str::random(10),
            'genero'=> 'masculino',
            'email'=> Str::random(10).'@gmail.com',
            'estado'=>'1',
            'curso'=>'Programación Avanzada',
            'fotografia'=> Str::random(10).'jpg',
            'fecha_ingreso'=>'2024-05-02'
        ];
    }
}
