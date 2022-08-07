<?php

namespace Database\Seeders;

use App\Models\RolesModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->buildRole('1', 'Admin');
        $this->buildRole('2', 'regional');
        $this->buildRole('3', 'outlet');
    }

    public function buildRole($code, $name)
    {
        RolesModel::create([
            'role_code' => $code,
            'role_name' => $name,
        ]);
    }
}
