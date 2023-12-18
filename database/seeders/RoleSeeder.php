<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'Administrador']);
        $doctor = Role::create(['name' => 'Doctor']);
        $patient = Role::create(['name' => 'Paciente']);

        Permission::create(['name' => 'specialties.create'])->assignRole($admin);
        Permission::create(['name' => 'specialties.edit'])->assignRole($admin);
        Permission::create(['name' => 'specialties.destroy'])->assignRole($admin);
        Permission::create(['name' => 'specialties.index'])->syncRoles([$admin, $patient]);

        Permission::create(['name' => 'doctors.create'])->assignRole($admin);
        Permission::create(['name' => 'doctors.edit'])->assignRole($admin);
        Permission::create(['name' => 'doctors.destroy'])->assignRole($admin);
        Permission::create(['name' => 'doctors.show'])->syncRoles([$admin, $patient]);

        Permission::create(['name' => 'patients.create'])->assignRole($admin);
        Permission::create(['name' => 'patients.edit'])->assignRole($admin);
        Permission::create(['name' => 'patients.destroy'])->assignRole($admin);
        Permission::create(['name' => 'patients.show'])->syncRoles([$admin, $patient]);
        Permission::create(['name' => 'patients.index'])->syncRoles([$admin, $patient]);
    }
}
