<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'administrador',
            'email' => 'administrador@tecsup.edu.pe',
            'address' => 'Av. Cascanueces',
            'phone' => '999 999 999',
            'dni' => '12345678',
            'password' => Hash::make("12345678"),
        ])->assignRole('Administrador');

        User::create([
            'name' => 'doctoruno',
            'email' => 'doctoruno@tecsup.edu.pe',
            'address' => 'Av. Cascanueces',
            'phone' => '999 999 999',
            'dni' => '12345678',
            'password' => Hash::make("12345678"),
        ])->assignRole('Doctor');

        User::create([
            'name' => 'pacienteuno',
            'email' => 'pacienteuno@tecsup.edu.pe',
            'address' => 'Av. Cascanueces',
            'phone' => '999 999 999',
            'dni' => '12345678',
            'password' => Hash::make("12345678"),
        ])->assignRole('Paciente');

        User::factory(17)->create()->each(function ($user){
            $user->assignRole('Paciente');
        });
    }
}
