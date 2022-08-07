<?php

namespace Database\Seeders;

use App\Models\RegionalModel;
use Illuminate\Database\Seeder;

class RegionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->build('Kantor Tasik', 'Tasikmalaya', '');
        $this->build('Kantor Ciamis', 'Ciamis', '');
        $this->build('Kantor Bandung', 'Bandung', '');
    }

    public function build($name, $regional, $address)
    {
        RegionalModel::create([
            'name' => $name,
            'regional' => $regional,
            'address' => $address
        ]);
    }
}
