<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(['name' => 'Funcionario']);
        Role::create(['name' => 'Docente']);
        Role::create(['name' => 'Estudiante']);
        Role::create(['name' => 'Visitante']);
    }
}