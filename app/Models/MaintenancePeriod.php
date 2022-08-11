<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenancePeriod extends Model
{
    use HasFactory;

    public function asset()
    {
        return $this->hasOne(ProductModel::class, 'code', 'product_code');
    }
    public function vendor()
    {
        return $this->hasOne(VendorModel::class, 'code', 'vendor_code');
    }
}


