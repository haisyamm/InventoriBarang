<?php

namespace Database\Seeders;

use App\Models\VendorModel;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->build('SP001', 'Supplier 1', '0812 01', 'Jakarta');
        $this->build('SP002', 'Supplier 2', '0812 02', 'Ciamis');
        $this->build('SP003', 'Supplier 3', '0812 03', 'Tasikmalaya');
    }

    public function build($code, $name, $phone, $address)
    {
        VendorModel::create([
            'code' => $code,
            'name' => $name,
            'phone' => $phone,
            'address' => $address,
        ]);
    }
}
