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

            Estos roles se guardan en la base de datos con el comando: php artisam db:seed
        */
        $administrador = Role::create(['name' => 'administrador']);
        $secretaria = Role::create(['name' => 'secretaria']);

        Permission::create(['name' => 'index']);
        Permission::create(['name' => 'home']);
        Permission::create(['name' => 'asistencia.reportes']);
        Permission::create(['name' => 'asistencia.pdf']);
        Permission::create(['name' => 'asistencia.pdf_fechas']);
        Permission::create(['name' => 'usuarios.reportes']);
        Permission::create(['name' => 'usuarios.pdf']);
        Permission::create(['name' => 'cursos.reportes']);
        Permission::create(['name' => 'cursos.pdf']);
        Permission::create(['name' => 'miembros.reportes']);
        Permission::create(['name' => 'miembros.pdf']);
    
    }
}
