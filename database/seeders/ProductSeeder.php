<?php

namespace Database\Seeders;

use App\Models\ProductModel;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->build('BRG0001', 'Kulkas', 'Sharp', 'Unit', 4000000, 5000000);
    }

    public function build($code, $name, $brand, $uom, $perchase_price, $selling_price)
    {
        ProductModel::create([
            'code' => $code,
            'name' => $name,
            'brand' => $brand,
            'uom' => $uom,
            'perchase_price' => $perchase_price,
            'selling_price' => $selling_price,
        ]);
    }
}
