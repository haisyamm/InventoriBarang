<?php

namespace Database\Seeders;

use App\Models\CompanyModel;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->build('Company Tasikmalaya', 'Tasikmalaya');
        $this->build('Company Ciamis', 'Ciamis');
    }

    public function build($name, $address)
    {
        CompanyModel::create([
            'name' => $name,
            'address' => $address,
        ]);
    }
}
