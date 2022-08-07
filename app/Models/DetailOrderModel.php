<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailOrderModel extends Model
{
    use HasFactory;

    protected $table = 'detail_order';
    protected $fillable = ['header_order_id', 'produk_id', 'purchase_price', 'selling_price', 'qty'];
}
