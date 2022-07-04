<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::create([
            'name' => "Kafalo Alex",
            'email' => "alex@gmail.com",
            'password' => bcrypt("alex@")
        ]);

        $role = Role::create(['name' => 'Etudiant']);
        $users->assignRole($role->id);
    }
}
