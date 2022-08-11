<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryOrderModel extends Model
{
    use HasFactory;

    protected $table = 'delivery_order';
    protected $fillable = ['company_id', 'department_id', 'vendor_id', 'order_number', 'order_date'];
}
