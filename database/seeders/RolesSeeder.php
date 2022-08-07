<?php

namespace Database\Seeders;

use App\Models\RolesModel;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->build('1', 'Admin');
        $this->build('2', 'Regional');
        $this->build('3', 'Outlet');
    }

    public function build($code, $name)
    {
        RolesModel::create([
            'role_code' => $code,
            'role_name' => $name,
        ]);
    }
}
