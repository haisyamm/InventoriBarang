<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStockModel extends Model
{
    use HasFactory;

    protected $table = 'product_stock';
    protected $fillable = ['product_code', 'stock'];
}
