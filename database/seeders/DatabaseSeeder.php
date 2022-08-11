<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RolesSeeder::class,
            ProductSeeder::class,
            RegionalSeeder::class,
            VendorSeeder::class,
            OutletSeeder::class,
            CompanySeeder::class,
            DepartmentSeeder::class
        ]);
    }
}
