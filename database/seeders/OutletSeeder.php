<?php

namespace Database\Seeders;

use App\Models\OutletModel;
use Illuminate\Database\Seeder;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->build('1', 'Toko Rancabango', 'Tasikmalaya, Rancabango');
        $this->build('2', 'Toko Cirahong', 'Ciamis, Cirahong');
        $this->build('3', 'Toko Cipedes', 'Bandung, Cipedes');
    }

    public function build($regional_id, $name, $address)
    {
        OutletModel::create([
            'regional_id' => $regional_id,
            'name' => $name,
            'address' => $address,
        ]);
    }
}
