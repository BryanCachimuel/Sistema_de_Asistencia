<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/*TODO: Complementos para los roles y permisos */
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*TODO: El sistema va a tener dos roles:
            1) Rol administrador
            2) Rol secretaría
        */
        $administrador = Role::create(['name' => 'administrador']);
        $secretaria = Role::create(['name' => 'secretaria']);
    }
}
