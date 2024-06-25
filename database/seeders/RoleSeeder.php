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
            Nota: los permisos que se van a dar a cada ruta hay que registrarlos conjuntamente con el registro de los roles 
            por que si se vuelve a ejecutar después de registrar los roles dara un error
        */
        $administrador = Role::create(['name' => 'administrador']);
        $secretaria = Role::create(['name' => 'secretaria']);

        Permission::create(['name' => 'index'])->syncRoles([$administrador,$secretaria]);
        Permission::create(['name' => 'home'])->syncRoles([$administrador,$secretaria]);
        Permission::create(['name' => 'asistencia_reportes'])->syncRoles([$administrador,$secretaria]);
        Permission::create(['name' => 'asistencia_pdf'])->syncRoles([$administrador,$secretaria]);
        Permission::create(['name' => 'asistencia_pdf_fechas'])->syncRoles([$administrador,$secretaria]);
        Permission::create(['name' => 'usuarios_reportes'])->syncRoles([$administrador,$secretaria]);
        Permission::create(['name' => 'usuarios_pdf'])->syncRoles([$administrador,$secretaria]);
        Permission::create(['name' => 'cursos_reportes'])->syncRoles([$administrador,$secretaria]);
        Permission::create(['name' => 'cursos_pdf'])->syncRoles([$administrador,$secretaria]);
        Permission::create(['name' => 'miembros_reportes'])->syncRoles([$administrador,$secretaria]);
        Permission::create(['name' => 'miembros_pdf'])->syncRoles([$administrador,$secretaria]);
        Permission::create(['name' => 'miembros'])->syncRoles([$administrador]);
        Permission::create(['name' => 'cursos'])->syncRoles([$administrador]);
        Permission::create(['name' => 'usuarios'])->syncRoles([$administrador]);
        Permission::create(['name' => 'asistencias'])->syncRoles([$administrador,$secretaria]);
    
    }
}
