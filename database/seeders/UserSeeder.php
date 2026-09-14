<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        //usuarios con los 4 roles que hay//
        $user1 = User::updateOrCreate(
            [
                'email' => 'funcionario@admin.cl',
            ],
            [
                'name' => 'Funcionario',
                'password' => Hash::make('12345678'),
            ]
        );
        $user2 = User::updateOrCreate(
            [
                'email' => 'docente@admin.cl',
            ],
            [
                'name' => 'Docente',
                'password' => Hash::make('12345678'),
            ]
        );
        $user3 = User::updateOrCreate(
            [
                'email' => 'Estudiante@admin.cl',
            ],
            [
                'name' => 'Estudiante',
                'password' => Hash::make('12345678'),
            ]
        );
        $user4 = User::updateOrCreate(
            [
                'email' => 'Visitante@admin.cl',
            ],
            [
                'name' => 'Visitante',
                'password' => Hash::make('12345678'),
            ]
        );

        $user1->assignRole('Funcionario');
        $user2->assignRole('Docente');
        $user2->assignRole('Estudiante');
        $user2->assignRole('Visitante');
    }
}