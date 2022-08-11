<?php

namespace Database\Seeders;

use App\Models\DepartmentModel;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->build('Department Ciamis', 'Ciamis');
        $this->build('Department Tasik', 'Tasik');
    }

    public function build($name, $address)
    {
        DepartmentModel::create([
            'name' => $name,
            'address' => $address,
        ]);
    }
}
