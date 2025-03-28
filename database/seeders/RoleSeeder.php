<?php

namespace Database\Seeders; // Asegúrate de este namespace

use Illuminate\Database\Seeder; // Importar la clase Seeder
use App\Models\User; // Importar el modelo User
use Spatie\Permission\Models\Role; // Importar Role del paquete Spatie

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Crear el rol "Administrador"
        Role::firstOrCreate(['name' => 'Administrador']);

        // Crear el usuario si no existe
        $user = User::firstOrCreate(
            ['email' => 'admin@example.com'], // Cambia el correo si lo necesitas
            ['name' => 'Administrador', 'password' => bcrypt('password')]
        );

        // Asignar el rol al usuario
        $user->assignRole('Administrador');
    }
}
