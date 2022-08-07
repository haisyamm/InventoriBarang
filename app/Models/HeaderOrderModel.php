<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderOrderModel extends Model
{
    use HasFactory;

    protected $table = 'header_order';
    protected $fillable = ['user_id', 'vendor_code', 'invoice', 'total', 'status'];

    public function vendor()
    {
        return $this->hasOne(VendorModel::class, 'code', 'vendor_code');
    }
}
