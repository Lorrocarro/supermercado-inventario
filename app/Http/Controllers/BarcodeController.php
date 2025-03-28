<?php
use App\Models\User;

// Encuentra al usuario por su ID
$user = User::find(1); // Cambia el ID según sea necesario

// Asigna el rol "Administrador"
$user->assignRole('Administrador');

if ($user->hasRole('Administrador')) {
    // Acción específica para usuarios administradores
    echo "El usuario es Administrador.";
} else {
    echo "El usuario no tiene rol de Administrador.";
}

