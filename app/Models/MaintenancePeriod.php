<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenancePeriod extends Model
{
    use HasFactory;

    protected $table = 'maintenance_periods';
    protected $fillable = ['vendor_code', 'asset_id', 'service_name', 'service_date', 'purchase_order', 'purchase_date', 'attachment'];

    public function asset()
    {
        return $this->hasOne(AssetsModel::class, 'code', 'asset_id');
    }
    public function vendor()
    {
        return $this->hasOne(VendorModel::class, 'code', 'vendor_code');
    }
}
