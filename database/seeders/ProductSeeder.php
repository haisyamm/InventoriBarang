<?php

namespace Database\Seeders;

use App\Models\ProductModel;
use App\Models\ProductStockModel;
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
        $this->build('BRG0001', 'Product One', 'Product One', 'Unit', 4000000, 5000000, 30);
        $this->build('BRG0002', 'Product Two', 'Product Two', 'Unit', 2000000, 3000000, 40);
        $this->build('BRG0003', 'Product Three', 'Product Three', 'Unit', 4000000, 5000000, 50);
        $this->build('BRG0004', 'Product For', 'Product For', 'Unit', 2000000, 3000000, 60);
        $this->build('BRG0005', 'Product Five', 'Product Five', 'Unit', 4000000, 5000000, 70);
        $this->build('BRG0006', 'Product Six', 'Product Six', 'Unit', 2000000, 3000000, 80);
        $this->build('BRG0007', 'Product Seven', 'Product Seven', 'Unit', 4000000, 5000000, 90);
        $this->build('BRG0008', 'Product Eight', 'Product Eight', 'Unit', 2000000, 3000000, 10);
        $this->build('BRG0009', 'Product Nine', 'Product Nine', 'Unit', 4000000, 5000000, 20);
        $this->build('BRG00010', 'Product Ten', 'Product Ten', 'Unit', 2000000, 3000000, 30);
    }

    public function build($code, $name, $brand, $uom, $perchase_price, $selling_price, $stock)
    {
        ProductModel::create([
            'code' => $code,
            'name' => $name,
            'brand' => $brand,
            'uom' => $uom,
            'purchase_price' => $perchase_price,
            'selling_price' => $selling_price,
        ]);

        ProductStockModel::create([
            'product_code' => $code,
            'stock' => $stock,
        ]);
    }
}
