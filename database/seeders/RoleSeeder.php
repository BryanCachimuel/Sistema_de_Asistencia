<?php

namespace Database\Seeders;

use App\Models\User;
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

        $admin = Role::create(['name' => 'admin']);
        $secretaria = Role::create(['name' => 'secretaria']);

        Permission::create(['name' => 'index'])->syncRoles([$admin, $secretaria]);
        Permission::create(['name' => 'home'])->syncRoles([$admin, $secretaria]);
        Permission::create(['name' => 'asistencia_reportes'])->syncRoles([$admin, $secretaria]);
        Permission::create(['name' => 'asistencia_pdf'])->syncRoles([$admin, $secretaria]);
        Permission::create(['name' => 'asistencia_pdf_fechas'])->syncRoles([$admin, $secretaria]);
        Permission::create(['name' => 'usuarios_reportes'])->syncRoles([$admin, $secretaria]);
        Permission::create(['name' => 'usuarios_pdf'])->syncRoles([$admin, $secretaria]);
        Permission::create(['name' => 'cursos_reportes'])->syncRoles([$admin, $secretaria]);
        Permission::create(['name' => 'cursos_pdf'])->syncRoles([$admin, $secretaria]);
        Permission::create(['name' => 'miembros_reportes'])->syncRoles([$admin, $secretaria]);
        Permission::create(['name' => 'miembros_pdf'])->syncRoles([$admin, $secretaria]);
        Permission::create(['name' => 'miembros'])->syncRoles([$admin]);
        Permission::create(['name' => 'cursos'])->syncRoles([$admin]);
        Permission::create(['name' => 'usuarios'])->syncRoles([$admin]);
        Permission::create(['name' => 'asistencias'])->syncRoles([$admin, $secretaria]);

        /*TODO: Asignación de roles */

        User::find(1)->assignRole($admin);
        User::find(2)->assignRole($secretaria);
        
    }
}
