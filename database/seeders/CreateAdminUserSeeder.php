<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => "Ibrahim Soro",
            'email' => "ibrahimsoro36@gmail.com",
            'password' => bcrypt("Bsoro96@")
        ]);

        $role = Role::create(['name' => 'Tuteur']);
        $user->assignRole($role->id);
    }
}
