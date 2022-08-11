<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarrantyModel extends Model
{
    use HasFactory;

    protected $table = 'warranty';
    protected $fillable = ['description', 'exp_date', 'period'];
}
