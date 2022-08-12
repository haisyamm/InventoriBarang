<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetsModel extends Model
{
    use HasFactory;

    protected $table = 'assets';
    protected $fillable = ['user_id', 'warranty_id', 'delivery_order_number', 'name', 'description', 'category', 'type', 'status'];

    public function delivery_order()
    {
        return $this->hasOne(DeliveryOrderModel::class, 'order_number', 'delivery_order_number');
    }

    public function warranty()
    {
        return $this->hasOne(WarrantyModel::class, 'id', 'warranty_id');
    }
}
