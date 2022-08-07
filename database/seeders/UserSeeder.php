<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->build('Admin', 'admin', 'admin', 1);
        $this->build('Regional', 'regional', 'regional', 2);
        $this->build('Outlet', 'outlet', 'outlet', 3);
    }

    public function build($name, $email, $password, $role_code)
    {
        User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'role_code' => $role_code,
        ]);
    }
}
