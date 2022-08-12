<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryOrderModel extends Model
{
    use HasFactory;

    protected $table = 'delivery_order';
    protected $fillable = ['company_id', 'department_id', 'vendor_id', 'order_number', 'order_date'];

    public function company()
    {
        return $this->hasOne(CompanyModel::class, 'id', 'company_id');
    }

    public function department()
    {
        return $this->hasOne(DepartmentModel::class, 'id', 'department_id');
    }

    public function vendor()
    {
        return $this->hasOne(VendorModel::class, 'id', 'vendor_id');
    }
}
