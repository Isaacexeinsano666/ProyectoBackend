<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        //roles definidos, los cuales van a ser 4 en total.//
        Role::create(['name' => 'Funcionario']);
        Role::create(['name' => 'Docente']);
        Role::create(['name' => 'Estudiante']);
        Role::create(['name' => 'Visitante']);
    }
}