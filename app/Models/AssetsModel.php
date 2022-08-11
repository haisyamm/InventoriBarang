<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetsModel extends Model
{
    use HasFactory;

    protected $table = 'assets';
    protected $fillable = ['user_id', 'warranty_id', 'delivery_order_number', 'name', 'description', 'category', 'type', 'status'];
}
